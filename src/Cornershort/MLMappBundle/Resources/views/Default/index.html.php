<?php $view->extend('CornershortMLMappBundle:Layout:layout.html.php') ?>

<?php $view['slots']->start('content') ?>
    <div class="note note-info">
        <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
    </div>

    <div class="row">
        <div class="col-md-4 ">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet box blue-hoki">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Portlet1 </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> Edit </a>
                        <a href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-plus"></i> Add </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="scroller" style="height:200px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                        <strong>Scroll is hidden</strong>
                        <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                        eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
                        amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis,
                        est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
        <div class="col-md-4 ">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Portlet2 </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="" class="fullscreen"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> Edit </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="blue" data-handle-color="red">
                        <strong>Scroll is always visible</strong>
                        <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                        eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
                        amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </div>
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
        <div class="col-md-4 ">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Portlet3 </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> Edit </a>
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-user"></i> User
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-pencil"></i> Edit </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-ban"></i> Ban </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="javascript:;"> Make admin </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="red" data-handle-color="green">
                        <strong>Scroll and rail are always visible</strong>
                        <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                        eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
                        amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor
                        ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur
                        purus sit amet fermentum. </div>
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Nestable Portlets </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="" class="fullscreen"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <p>
                        <strong>Scroll is hidden</strong>
                        <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                        eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
                        amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <div class="row">
                        <div class="col-md-4">
                            <!-- BEGIN Portlet PORTLET-->
                            <div class="portlet solid purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Portlet </div>
                                    <div class="actions">
                                        <a href="javascript:;" class="btn blue btn-sm">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                        <div class="btn-group">
                                            <a class="btn btn-sm green" href="javascript:;" data-toggle="dropdown">
                                                <i class="fa fa-user"></i> User
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height:200px">
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Portlet PORTLET-->
                        </div>
                        <div class="col-md-4">
                            <!-- BEGIN Portlet PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Portlet </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="" class="fullscreen"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height:200px">
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Portlet PORTLET-->
                        </div>
                        <div class="col-md-4">
                            <!-- BEGIN Portlet PORTLET-->
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Portlet </div>
                                    <div class="actions">
                                        <a href="javascript:;" class="btn blue btn-sm">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                        <div class="btn-group">
                                            <a class="btn btn-sm green" href="javascript:;" data-toggle="dropdown">
                                                <i class="fa fa-user"></i> User
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height:200px">
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                        <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
                                            consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Portlet PORTLET-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Portlet </div>
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <a href="#portlet_tab_3" data-toggle="tab"> Tab 3 </a>
                                        </li>
                                        <li>
                                            <a href="#portlet_tab_2" data-toggle="tab"> Tab 2 </a>
                                        </li>
                                        <li class="active">
                                            <a href="#portlet_tab_1" data-toggle="tab"> Tab 1 </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_tab_1">
                                            <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                                praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                magna aliquam erat volutpat.ut laoreet dolore magna ut laoreet dolore magna. ut laoreet dolore magna. ut laoreet dolore magna. </p>
                                        </div>
                                        <div class="tab-pane" id="portlet_tab_2">
                                            <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo. </p>
                                        </div>
                                        <div class="tab-pane" id="portlet_tab_3">
                                            <p> Ut wisi enim ad btn-smm veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                                                esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                                nulla facilisi. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN Portlet PORTLET-->
                            <div class="portlet solid grey-cascade">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Portlet </div>
                                    <div class="actions">
                                        <a href="javascript:;" class="btn default btn-sm">
                                            <i class="fa fa-pencil icon-black"></i> Edit </a>
                                        <div class="btn-group">
                                            <a class="btn btn-sm red" href="javascript:;" data-toggle="dropdown">
                                                <i class="fa fa-user"></i> User
                                                <i class="fa fa-angle-down "></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body"> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget
                                    lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.nisi erat porttitor
                                    ligula, eget lacinia odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                    fermentum </div>
                            </div>
                            <!-- END GRID PORTLET-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
<?php $view['slots']->stop() ?>
