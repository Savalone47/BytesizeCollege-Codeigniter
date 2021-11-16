<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"><?php echo $department["departmentName"]?></div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;
                        <a class="parent-item"
                           href="<?=base_url('course/index')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item"
                           href="all_department.php">All Department</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Courses</li>
                </ol>
            </div>
        </div>
        <!-- start course list -->
        <!-- End course list -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>All Courses</header>
                        <button id="sdntmenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                        </button>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <a href="<?php echo site_url('course/add')?>" id="addRow" class="btn btn-info">
                                        Add New <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <?php foreach($courses as $course){?>
                                <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                    <div class="blogThumb">
                                        <div class="thumb-center"><img class="img-responsive" alt="user" src="<?php echo site_url("resources/assets_admin/img/course/course1.jpg")?>"></div>
                                        <div class="course-box">
                                            <h4><?php echo $course["courseName"]?></h4>
                                            <a href="<?=site_url('department/course_details/'.$course['coursesID'])?>">
                                                <button type="button"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read
                                                    More </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="row">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->