
<?php $view->extend('CornershortMLMappBundle:Layout:form.html.php') ?>

<?php $view['slots']->set('PageTitle', 'Add New Member') ?>
<?php $view['slots']->set('PageTitleSmall', '') ?>

<?php $view['slots']->start('page-toolbar') ?>
<div class="form-actions noborder">
    <button type="button" id="visor-form-submit" class="btn blue">Submit</button>
    <a type="button" href="<?php echo $view['router']->path('cornershort_mlmapp_homepage', array()) ?>" class="btn default">Cancel</a>
</div>
<?php $view['slots']->stop() ?>

<?php $view['slots']->start('visor-form-body') ?>
<div class="tab-content">

    <div id="message_success" class="alert alert-success" style="display:none;">
        <span id="message_success"></span>
    </div>

    <div id="message_danger" class="alert alert-danger" style="display:none;">
        <span id="message_danger"></span>
    </div>

    <div class="pane">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <input type="hidden" class="form-control" id="leader_id" name="leader_id" value="<?php echo $memberId; ?>" placeholder="" ng-blur="registerMemberTab_searchLeaderId();" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <input type="hidden" class="form-control" id="leader_name" name="leader_name" value="<?php echo $memberName; ?>" placeholder="" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="gender">Gender</label>
                        <select class="form-control required" id="gender" name="gender" aria-required="true" aria-invalid="false" aria-describedby="gender-error">
                            <option value="">Select one</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="bank_acct_no">Bank Account Number</label>
                        <input type="text" class="form-control" id="bank_acct_no" name="bank_acct_no" value="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control" id="email" name="email" value="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="role">Role</label>
                        <select class="form-control required" id="role" name="role" aria-required="true" aria-invalid="false" aria-describedby="role-error">
                            <option value="">Select one</option>
                            <option value="95">User</option>
                            <option value="100">Admin</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group form-md-line-input">
                        <label for="home_add_house_no">Home Address</label>
                        <input type="text" class="form-control" id="home_add_house_no" name="home_add_house_no" value="" placeholder="No">
                        <input type="text" class="form-control" id="home_addr_street" name="home_addr_street" value="" placeholder="Street">
                        <input type="text" class="form-control" id="home_addr_brgy" name="home_addr_brgy" value="" placeholder="Brgy.">
                        <input type="text" class="form-control" id="home_addr_subd" name="home_addr_subd" value="" placeholder="Village / Subdivision">
                        <input type="text" class="form-control" id="home_addr_city" name="home_addr_city" value="" placeholder="City">
                        <input type="text" class="form-control" id="home_addr_province" name="home_addr_province" value="" placeholder="Province">
                    </div>
                </div>
            </div>

            <div class="btn-group">
                <div class="button-container">
                    <button type="button" id="add-member-form-submit" ng-Click="registerMemberTab_addNewMember()" class="btn btn-lg btn-success">Submit</button>
                    <button type="button" id="add-member-form-cancel" onClick="window.history.back();" class="btn btn-lg red">Cancel</button>
                </div>
            </div>

    </div>
</div>

<?php $view['slots']->stop() ?>
