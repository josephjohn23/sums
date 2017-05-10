<?php $view->extend('CornershortMLMappBundle:Layout:layout.html.php') ?>

<?php $view['slots']->start('content') ?>
    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green-sharp" href="#">
                <div class="visual">
                    <i class="fa "></i>
                </div>
                <div class="details">
                    <div class="number">
                        Welcome back <span data-counter="counterup">{{ homeTabResults.member_info.first_name }} {{ homeTabResults.member_info.last_name }}!</span>
                    </div>
                    <div class="desc"> Great to see you again </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-user"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ homeTabResultsTotalMembers }}">{{ homeTabResultsTotalMembers }}</span>
                    </div>
                    <div class="desc"> Total Member Count </div>
                </div>
            </a>
        </div>

        <div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Welcome To Your Dashboard</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="" class="fullscreen"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="scroller" style="height:200px; display: flex; justify-content: center; align-items: center; color:#064c7b">
                                  <p>This is a User Management System that was created by John Joseph Hilario for his exam for the PHP Developer role. Feel free to explore this simple system.</p>
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $view['slots']->stop() ?>
