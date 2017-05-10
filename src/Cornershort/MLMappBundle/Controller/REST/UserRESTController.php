<?php

namespace Cornershort\MLMappBundle\Controller\REST;

use Cornershort\MLMappBundle\Entity\User;
use Cornershort\MLMappBundle\Form\UserType;

use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View as FOSView;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Voryx\RESTGeneratorBundle\Controller\VoryxController;

/**
 * User controller.
 * @RouteResource("User")
 */
class UserRESTController extends VoryxController
{
    public function postHomeAction(Request $request){
        $SQLHelper = $this->get('cornershort_sql_helper.api');
        $data = json_decode($request->getContent(), true);

        $my_id = $this->getUser()->getMemberId();
        //FIND myInfo
        $params = array('my_id' => $my_id,);
        $sql = "SELECT * FROM users WHERE member_id=:my_id ";
        $my_info = $SQLHelper->fetchRow($sql, $params);

        //FIND totalMembers
        $params = array('my_id' => $my_id,);
        $sql = "SELECT * FROM users ";
        $total_members = $SQLHelper->fetchRows($sql);

        //FIND next_leader_id
        $sql = "SELECT next_leader_id, activation_level FROM users WHERE member_id=:my_id";
        $next_leader_info = $SQLHelper->fetchRow($sql, $params);

        //FIND next_leader_info
        $params = array('next_leader_id' => $next_leader_info['next_leader_id'],);
        $sql = "SELECT * FROM users WHERE member_id=:next_leader_id";
        $next_leader_info = $SQLHelper->fetchRow($sql, $params);

            if (!isset($next_leader_info['member_id'])) {
                $next_leader_info['member_id'] = '001';
                $next_leader_info['first_name'] = 'Juan';
                $next_leader_info['last_name'] = 'Dela Cruz';
                $next_leader_info['mobile_number'] = '09251234567';
                $next_leader_info['home_addr_city'] = 'San Fernando';
                $next_leader_info['home_addr_province'] = 'Pampanga';
            }

        $result = [];
        $result['total_members'] = $total_members;
        $result['member_info'] = $my_info;
        $result['next_leader_info'] = $next_leader_info;
        $result['my_info_level'] = $my_info['activation_level'];

        return $result;
    }

    /**
     * Create a User entity.
     *
     * @View(statusCode=201, serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     *
     * @return Response
     *
     */
    public function postAddRegisterMemberAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $SQLHelper = $this->get('cornershort_sql_helper.api');
        $data = json_decode($request->getContent(), true);
        $saved_record = 0;

        //FIND memberId
        $myInfo = $em->getRepository('CornershortMLMappBundle:User')->findAll();
        $num = sizeof($myInfo) - 1;
        $memberId = $myInfo[$num]->getId() + 1;

        $data['member_id'] = str_pad($memberId, 8, '0', STR_PAD_LEFT);
        $data['acct_id'] = str_pad($memberId, 8, '0', STR_PAD_LEFT);
        $data['leader_id'] = str_pad($data['leader_id'], 8, '0', STR_PAD_LEFT);
        $data['next_leader_id'] = str_pad($data['leader_id'], 8, '0', STR_PAD_LEFT);
        $data['roles'] = 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}';
        $data['access_level'] = $data['role'];
        $data['activation_level'] = 1;
        $data['status'] = 'Active';
        $data['enabled'] = 1;

        $data['leader_name'] = ucfirst($data['leader_name']);
        $data['first_name'] = ucfirst($data['first_name']);
        $data['last_name'] = ucfirst($data['last_name']);
        $data['home_addr_street'] = ucfirst($data['home_addr_street']);
        $data['home_addr_brgy'] = ucfirst($data['home_addr_brgy']);
        $data['home_addr_subd'] = ucfirst($data['home_addr_subd']);
        $data['home_addr_city'] = ucfirst($data['home_addr_city']);
        $data['home_addr_province'] = ucfirst($data['home_addr_province']);

        $params = array('email' => $data['email']);
        $sql = "SELECT * FROM users WHERE email=:email";
        $users = $SQLHelper->fetchRow($sql, $params);

        if (!($users)) {
            $saved_record = $SQLHelper->insertRecord('users', $data);
        } else {
            return "Error";
        }

        if (!$saved_record) {
            return "Error";
        } else {
            // Update user password
            $um = $this->get('fos_user.user_manager');
            $user = $um->findUserByEmail($data['email']);
            $user->setPlainPassword($data['password']);
            $um->updateUser($user, true);

            return "Success";
        }
    }

    public function postFindMyInfoAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(), true);
        $memberId = str_pad($data['leader_id'], 8, '0', STR_PAD_LEFT);
        $leaderId = str_pad($data['leader_id'], 8, '0', STR_PAD_LEFT); //need $leaderId = session['leaderId'];

        //FIND myInfo
        $myInfo = $em->getRepository('CornershortMLMappBundle:User')->findBy(
            array(
                'memberId' => $this->getUser()->getMemberId()
            )
        );

        //FIND memberInfo
        $memberInfos = $em->getRepository('CornershortMLMappBundle:User')->findBy(
            array(
                'leaderId' => $this->getUser()->getMemberId()
            )
        );

        //$result['myInfo'] = is_null($myInfo[0]) ? null : $myInfo;
        $result['myInfo'] = isset($myInfo[0]) ? $myInfo : null;
        //$result['memberInfos'] = is_null($memberInfos[0]) ? null : $memberInfos;
        $result['memberInfos'] = isset($memberInfos[0]) ? $memberInfos : null;

        return $result;
    }

    public function postEditAccountAction(Request $request){
        $SQLHelper = $this->get('cornershort_sql_helper.api');
        $data = json_decode($request->getContent(), true);
        $saved_record = 0;

        // $data['password'] = md5($data['password']);
        $data_password = (isset($data['password']) && $data['password'] != '') ? $data['password'] : false;

        if($data_password){
            // Update user password
            $um = $this->get('fos_user.user_manager');
            $user = $um->findUserByEmail($data['email']);
            $user->setPlainPassword($data['password']);
            $um->updateUser($user, true);

            unset($data['password']);
            $params = array('email' => $data['email']);
            $sql = "SELECT * FROM users WHERE email=:email";
            $users = $SQLHelper->fetchRow($sql, $params);
        }

        if ($users) {
            $saved_record = $SQLHelper->updateRecord('users', $data);
        } else {
            return "Error";
        }

        if (!$saved_record) {
            return "Error";
        } else {
            return "Success";
        }
    }
}
