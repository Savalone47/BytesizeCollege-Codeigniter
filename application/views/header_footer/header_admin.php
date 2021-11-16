<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="VincoCursus" />
    <title>ByteSize</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="<?php echo base_url()?>resources/assets_admin/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>resources/assets_admin/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>resources/assets_admin/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="<?php echo site_url("resources/assets_admin/plugins/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url("resources/assets_admin/plugins/summernote/summernote.css")?>" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="<?php echo site_url("resources/assets_admin/plugins/material/material.min.css")?>">
    <link rel="stylesheet" href="<?php echo site_url("resources/assets_admin/css/material_style.css")?>">
    <!-- inbox style -->
    <link href="<?php echo site_url("resources/assets_admin/css/pages/inbox.min.css")?>" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="<?php echo site_url("resources/assets_admin/css/theme/light/theme_style.css")?>" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?php echo site_url("resources/assets_admin/css/plugins.min.css")?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url("resources/assets_admin/css/theme/light/style.css")?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url("resources/assets_admin/css/responsive.css")?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url("resources/assets_admin/css/theme/light/theme-color.css")?>" rel="stylesheet" type="text/css" />
	<!-- style -->
    <link href='<?php echo site_url("resources/assets_admin/plugins/fullcalendar/packages/core/main.min.css")?>' rel='stylesheet' />
	<link href='<?php echo site_url("resources/assets_admin/plugins/fullcalendar/packages/daygrid/main.min.css")?>' rel='stylesheet' />
	<link href='<?php echo site_url("resources/assets_admin/plugins/fullcalendar/packages/timegrid/main.min.css")?>' rel='stylesheet' />
	<link href='<?php echo site_url("resources/assets_admin/css/pages/fullcalendar.css")?>' rel='stylesheet' />
	<!-- favicon -->

    <link rel="shortcut icon" href="<?php echo site_url("resources/images/logo.png")?>" />
</head>
<!-- END HEAD -->

<body
        class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md  white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="<?php echo site_url('course/report');?>">
						<span class="text-center justify-content-center">
                            <img src="<?php echo site_url("resources/images/logo.png")?>" style="width:50%" alt="">
                        </span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>
                <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->

                <!-- Student Profile Start -->
                <?php if($this->session->type_user == 2):?>
                <?php
                    $data['notice'] = $this->Notification_model->get_all_notification_count($this->session->id_user);
                    $this->load->view('header_footer/notice/notice', $data) ;
                    ?>
                    <!-- Student Profile End -->

                    <!-- Admin Profile Start -->
                <?php elseif($this->session->type_user == 1):?>
                    <?php
                        $data['notice'] = $this->Notification_model->get_all_notification_count($this->session->id_user);
                        $data['get_notice'] = $this->Notification_model->get_notifications($this->session->id_user);
                        $this->load->view('header_footer/notice/notice', $data);

                    ?>
                    <!-- Admin Profile End -->
                <?php endif;?>

            </div>
        </div>

        <!-- end header -->
        <!-- start color quick setting -->
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="quick-setting slimscroll-style">
                        <ul id="themecolors">
                            <li>
                                <p class="sidebarSettingTitle">Sidebar Color</p>
                            </li>
                            <li class="complete">
                                <div class="theme-color sidebar-theme">
                                    <a href="#" data-theme="white"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="dark"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="blue"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="indigo"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="cyan"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="green"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="red"><span class="head"></span><span
                                                class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header Brand color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color logo-theme">
                                    <a href="#" data-theme="logo-white"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="logo-green"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="logo-red"><span class="head"></span><span
                                                class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color header-theme">
                                    <a href="#" data-theme="header-white"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="header-dark"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="header-blue"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="header-green"><span class="head"></span><span
                                                class="cont"></span></a>
                                    <a href="#" data-theme="header-red"><span class="head"></span><span
                                                class="cont"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <?php if($this->session->type_user == 1):?>
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="<?php echo site_url("resources/assets_admin/img/dp.jpg")?>" class="img-circle user-img-circle"
                                             alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <p><?php echo $this->session->name_user?></p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("course/report")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo site_url("department/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">event</i>
                                    <span class="title">Departments</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo site_url("course/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">people</i>
                                    <span class="title">Courses</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo site_url("module/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">person</i>
                                    <span class="title">Module Shelf</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">local_library</i>
                                    <span class="title">Topics</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("student/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Students' View</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("exam/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">local_library</i>
                                    <span class="title">Exams</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("book/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">book</i>
                                    <span class="title">Library</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("timetable/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">list</i>
                                    <span class="title">Time Table</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("event/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">description</i>
                                    <span class="title">Events</span>
                                </a>
                            </li>
                            <li class="external">
                                <a href="<?php echo site_url('notification/index');?>" class="nav-link nav-toggle">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="title">Annoucements</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('login/deconnexion')?>">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                        <?php elseif($this->session->type_user == 2):?>
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="<?php echo site_url("resources/assets_admin/img/dp.jpg")?>" class="img-circle user-img-circle"
                                             alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <p><?php echo $this->session->name_user?></p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("student/my_courses")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">description</i>
                                    <span class="title">My Courses</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("timetable/index")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">local_library</i>
                                    <span class="title">TimeTable exam</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url("exam/resultStudent")?>" class="nav-link nav-toggle">
                                    <i class="material-icons">local_library</i>
                                    <span class="title">My results</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('login/deconnexion')?>">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                        <?php endif ?>
                    </div>
                </div>
            </div>