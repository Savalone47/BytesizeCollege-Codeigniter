<!-- start header menu -->
<div class="top-menu">
    <?php if($this->session->type_user == 2):?>
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
            </ul>
        </li>
        <li class="dropdown dropdown-user">
            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
               data-close-others="true">
                <img alt="" class="img-circle " src="<?php echo base_url('resources/assets_admin/img/dp.jpg')?>"/>
                <span class="username username-hide-on-mobile"> <?php echo $this->session->name_user?> </span>
                <i class="fa fa-angle-down"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="<?php echo site_url("student/student_profile_dashboard");?>">
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
    <?php elseif($this->session->type_user == 1):?>

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
                </ul>
            </li>
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
    <?php endif;?>
</div>