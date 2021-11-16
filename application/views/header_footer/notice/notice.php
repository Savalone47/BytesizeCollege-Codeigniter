<!-- start header menu -->
<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <li><a class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
        <!-- start language menu -->

        <!-- end language menu -->
        <!-- start notification dropdown -->
        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
            <a class="dropdown-toggle"
               data-bs-toggle="dropdown"
               data-hover="dropdown"
               data-close-others="true">
                <i class="fa fa-bell-o"></i>
                <span class="badge headerBadgeColor1"><?=($notice);?></span>
            </a>

            <ul class="dropdown-menu">
                <li class="external">
                    <h3><span class="bold"><a href="<?php echo site_url('notification/index');?>"> All Notifications</a></span></h3>
                    <span class="notification-label purple-bgcolor">New <?=($notice);?></span>
                </li>

                <!--<li>
                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                        <li>
                            <a href="javascript:;">
                                <span class="time">20/11/2010</span>
                                <span class="details"><span class="notification-icon circle deepPink-bgcolor"><i
                                                                class="fa fa-check"></i></span>Congratulations</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="time">3 mins</span>
                                <span class="details"><span class="notification-icon circle purple-bgcolor"><i
                                                                class="fa fa-user o"></i></span><b>John Micle </b>is now following you. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="time">7 mins</span>
                                <span class="details"><span class="notification-icon circle blue-bgcolor"><i
                                                                class="fa fa-comments-o"></i></span><b>Sneha Jogi </b>sent you a message. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="time">12 mins</span>
                                <span class="details"><span class="notification-icon circle pink"><i
                                                                class="fa fa-heart"></i></span><b>Ravi Patel </b>like your photo. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="time">15 mins</span>
                                <span class="details"><span class="notification-icon circle yellow"><i
                                                                class="fa fa-warning"></i></span> Warning! </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="time">10 hrs</span>
                                <span class="details"><span class="notification-icon circle red"><i
                                                                class="fa fa-times"></i></span> Application error. </span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown-menu-footer">
                        <a href="#"> All notifications </a>
                    </div>
                </li>-->
            </ul>
        </li>

        <!-- end message dropdown -->
        <!-- start manage user dropdown -->
        <li class="dropdown dropdown-user">
            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
               data-close-others="true">
                <img alt="" class="img-circle " src="<?php echo base_url('resources/assets_admin/img/dp.jpg')?>"/>
                <span class="username username-hide-on-mobile"> <?php echo $this->session->name_user?> </span>
                <i class="fa fa-angle-down"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="#">
                        <i class="icon-user"></i> Profile </a>
                </li>
                <li class="divider"> </li>

                <li>
                    <a href="<?php echo site_url('login/deconnexion')?>">
                        <i class="icon-logout"></i> Log Out </a>
                </li>
            </ul>
        </li>
        <!-- end manage user dropdown -->
        <li class="dropdown dropdown-quick-sidebar-toggler">
            <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
               data-upgraded=",MaterialButton">
                <i class="material-icons">more_vert</i>
            </a>
        </li>
    </ul>
</div>