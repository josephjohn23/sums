var myAppModule = angular
	.module("myAppModule", [])
	.controller("myAppController", function($scope, $http, $rootScope) {
		//HOME MENU
		$scope.homeTab_searchMemberInfo = function () {
			var data = {
				member_id: '00000001',
				leader_id: '00000001'
			}

			$http(
					{
						method: 'POST',
                        url: Routing.generate('api_post_user_home'),
						data: data,
						headers: {
							"Content-Type": "application/json; charset=utf-8",
							"Accept": "application/json"
						}
					})
					.then(
							function (results) {
								$rootScope.homeTabResults = results.data;
								$rootScope.homeTabResultsTotalMembers = results.data.total_members.length;
							});
		};

		//REGISTER MEMBER MENU - ADD NEW MEMBER
		$scope.registerMemberTab_searchLeaderId = function () {
			var data = {
				leader_id: $('#leader_id').val()
			}

			$http(
					{
						method: 'POST',
                        url: Routing.generate('api_post_user_find_my_info'),
						data: data,
						headers: {
							"Content-Type": "application/json; charset=utf-8",
							"Accept": "application/json"
						}
					})
					.then(
							function (results) {
								if (typeof results.data.myInfo === "undefined"){
									$("html, body").animate({scrollTop: 1}, 1000);
									$('#leader_name').val('');
									messageAlert('Member Id do not exist!', 'danger');
								} else {
									$('#leader_name').val(results.data.myInfo[0].first_name + ' ' + results.data.myInfo[0].last_name);
								}
							});
		};

		//REGISTER MEMBER MENU - ADD NEW MEMBER
		$scope.registerMemberTab_searchMyInfo = function () {
			var data = {
				leader_id: '00000001'
			}

			$http(
					{
						method: 'POST',
                        url: Routing.generate('api_post_user_find_my_info'),
						data: data,
						headers: {
							"Content-Type": "application/json; charset=utf-8",
							"Accept": "application/json"
						}
					})
					.then(
							function (results) {
								$rootScope.registerMemberTabResults = results.data;
							});
		};

		//REGISTER MEMBER MENU - ADD NEW MEMBER
		$scope.registerMemberTab_addNewMember = function () {
		    var data = {
				leader_id: $('#leader_id').val(),
				next_leader_id: $('#leader_id').val(),
		        password: 'abc123',
		        last_name: $('#last_name').val(),
		        first_name: $('#first_name').val(),
		        middle_name: $('#middle_name').val(),
		        date_of_birth: $('#date_of_birth').val(),
		        gender: $('#gender').val(),
						role: $('#role').val(),
		        mobile_number: $('#mobile_number').val(),
		        email: $('#email').val(),
		        home_add_house_no: $('#home_add_house_no').val(),
		        home_addr_street: $('#home_addr_street').val(),
		        home_addr_brgy: $('#home_addr_brgy').val(),
		        home_addr_subd: $('#home_addr_subd').val(),
		        home_addr_city: $('#home_addr_city').val(),
		        home_addr_province: $('#home_addr_province').val(),
		        username: $('#email').val(),
		        username_canonical: $('#email').val(),
		        email_canonical: $('#email').val(),
		        user_id: $('#leaders_id').val(),
		        bank_acct_no: $('#bank_acct_no').val()
		    };

			$http(
                    {
                        method: 'POST',
                        url: Routing.generate('api_post_user_add_register_member'),
                        data: data,
                        headers: {
                            "Content-Type": "application/json; charset=utf-8",
                            "Accept": "application/json"
                        }
                    })
                    .then(
                            function (results) {
								$("html, body").animate({scrollTop: 1}, 1000);
						        if (results.data == "Success"){
									$scope.registerMemberTab_searchMyInfo();
						            messageAlert('Successfully added new members!', 'success');
						        } else {
						            messageAlert('Unable to add new member!', 'danger');
						        }
                            });
		};


		//POP UP MESSAGE
        $scope.messageAlert = function (data, type) {
            $("#message_" + type).show();
            $("#message_" + type).html(data);

            setTimeout(function () {
                $("#message_" + type).hide();
                // window.location = window.location;
            }, 5000);
        };

		//LOAD FUNCTIONS
		$scope.homeTab_searchMemberInfo();
		$scope.registerMemberTab_searchMyInfo();
});
