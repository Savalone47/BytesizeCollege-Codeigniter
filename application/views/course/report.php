<!-- end sidebar menu -->
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Reports</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="<?=base_url("course/index")?>">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Reports</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="state-overview">
            <div class="row">

                <div class="col-xl-4 col-md-6 col-12">
                    <a href="<?=site_url('course/allStudents_printable')?>">
                        <div class="info-box bg-b-green" style="color: #fff;">
                            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">All Students</span>
                                <span class="info-box-number"><?=($all_students_count);?>   students</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <!-- /.col -->
                <div class="col-xl-4 col-md-6 col-12">
                    <a href="<?=site_url('course/student_per_course')?>">
                        <div class="info-box bg-b-yellow" style="color: #fff;">
                            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Students Per Course</span>
                                <span class="info-box-number"><?=($course_per);?> courses dispensed</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 60%"></div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                    <a href="<?=site_url("course/student_per_branch")?>">
                        <div class="info-box bg-b-blue" style="color: #fff;">
                            <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text" >Students Per Branch</span>
                                <span class="info-box-number"><?=($branch_per);?>  branches</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <!-- /.col -->
                <div class="col-xl-4 col-md-6 col-12">
                    <a href="<?php echo site_url('course/staff_login_report')?>">
                        <div class="info-box bg-b-" style="background-color: #8E44AD !important; color: #fff;">
                                    <span class="info-box-icon push-bottom"><i
                                            class="material-icons">content_cut</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Staff Login</span>
                                <span class="info-box-number">88 in total</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                    <a href="<?php echo site_url('course/staff_login_student');?>">
                        <div class="info-box bg-b-" style="background-color: #e91e63 !important; color: #fff;">
                                    <span class="info-box-icon push-bottom"><i
                                            class="material-icons">content_cut</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Student Login</span>
                                <span class="info-box-number">12 in total</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- end page content -->


