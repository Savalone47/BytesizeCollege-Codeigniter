<?php
    $this->load->view('header_footer/header_admin');
?>
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Class Details</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="<?=base_url('course/index')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="all_class_course.php">All Class</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Class Details</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="course-picture">
                                        <img src="<?=base_url()?>resources/assets_admin/img/course/course1.jpg" class="img-responsive"
                                             alt=""> </div>
                                </div>

                                <?php foreach ($course as $c):?>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name"><?php echo $c['courseName']?> </div>
                                </div>

                                <div class="profile-userbuttons">
                                    <a href="<?=site_url('course/edit/'.$c['coursesID'])?>">
                                        <button type="button"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">
                                            Edit
                                        </button>
                                    </a>
                                    <a href="<?=site_url('course/remove/'.$c['coursesID'])?>">
                                            <button type="button"
                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">
                                                Delete
                                            </button>
                                    </a>
                                </div>

                                <!-- END SIDEBAR USER TITLE -->
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-head">
                                                    <header>SUBJECT</header>
                                                    <a href="add_subjet.php">
                                                        <button class="btn btn-success btn-xs"
                                                        >
                                                            <i class="fa fa-plus"></i> ADD SUBJET
                                                        </button>
                                                    </a>

                                                    <div class="tools">
                                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                                           href="javascript:;"></a>
                                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                    </div>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped custom-table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Teachers</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="dropdown dropdown-extended dropdown-notification">
                                                            <tr>
                                                                <td>
                                                                    <a href="subject_option.php">
                                                                        Teachings Practices
                                                                    </a>
                                                                </td>
                                                                <td>Lecture</td>
                                                                <td>
                                                                    <a href="add_student_to_course.php">
                                                                        <button class="btn btn-success btn-xs">
                                                                            <i class="fa fa-plus"></i> ADD STUDENT
                                                                        </button>
                                                                    </a>
                                                                    <button class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash-o "></i> REMOVE
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>

            <div class="row">
                <div class="card">
                    <h3>ALL STUDENTS</h3>

                    <div class="table-scrollable">
                        <table
                            class="table table-responsive table-bordered table-hover table-checkable order-column valign-middle"
                            id="example4">
                            <thead>
                            <tr>
                                <th></th>
                                <th> Roll No </th>
                                <th> Name </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allStudent as $std): ?>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="<?=base_url()?>resources/assets_admin/img/std/std1.jpg"
                                         alt="">
                                </td>
                                <td class="left"><?php echo $std['studentID']?></td>
                                <td><?php echo $std['studentName'];?></td>
                                <td>
                                    <button class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i> <a href="<?php echo site_url('student/remove/'. $std['studentID']) ?>">REMOVE STUDENT</a>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- end page content -->
<?php
    $this->load->view('header_footer/footer_admin');
?>