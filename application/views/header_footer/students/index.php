<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Students</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="<?=base_url('course/report')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Students List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <ul class="nav customtab nav-tabs" role="tablist">
                        <div class="btn-group">
                            <a href="<?=site_url('student/add')?>" id="addRow"
                               class="btn btn-info">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab2">
                            <div class="row">
                                <?php if($this->session->success):?>
                                    <div class="col-md-12 alert alert-success">
                                        <p>Activation of student is done!</p>
                                    </div>
                                <?php endif?>
                                <?php if($this->session->error):?>
                                    <div class="col-md-12 alert alert-danger">
                                        <p>Activation of student is done!</p>
                                    </div>
                                <?php endif?>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All Student</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New Student</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Enrolled</button>
                                        <button class="nav-link" id="nav-semestre-tab" data-bs-toggle="tab" data-bs-target="#nav-semestre" type="button" role="tab" aria-controls="nav-semestre" aria-selected="false">Per Semestre</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <?php foreach($students as $s){?>
                                                <?php if($s["activeStatus"] == 1){?>
                                                    <div class="col-md-4">
                                                        <div class="card card-box">
                                                            <div class="card-body no-padding ">
                                                                <div class="doctor-profile">
                                                                    <img src="<?php echo site_url("resources/assets_admin/img/std/std10.jpg")?>" class="doctor-pic"
                                                                         alt="">
                                                                    <div class="profile-usertitle">
                                                                        <div class="doctor-name"><?php echo $s["studentName"]?></div>
                                                                        <div class="name-center"> <a href="mailto:<?php echo $s["studentEmail"]?>"><?php echo $s["studentEmail"]?></a> </div>
                                                                    </div>
                                                                    <p><?php echo $s["studentAddress"]?></p>
                                                                    <div>
                                                                        <p><i class="fa fa-phone"></i><a
                                                                                href="tel:<?php echo $s["studentPhone"]?>"><?php echo $s["studentPhone"]?></a></p>
                                                                    </div>
                                                                    <div class="profile-userbuttons">
                                                                        <a href="<?php echo site_url('student/student_profile/'.$s['studentID']); ?>"
                                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                                            More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                        <div class="row">
                                            <?php foreach($students as $s){
                                                $date = explode(" ",$s["studentTimestamp"]);
                                                $output = $date[0];
                                                if($output == date("y-m-d") and $s["activeStatus"] == 0){?>
                                                    <div class="col-md-4">
                                                        <div class="card card-box">
                                                            <div class="card-body no-padding ">
                                                                <div class="doctor-profile">
                                                                    <img src="<?php echo site_url("resources/assets_admin/img/std/std10.jpg")?>" class="doctor-pic"
                                                                         alt="">
                                                                    <div class="profile-usertitle">
                                                                        <div class="doctor-name"><?php echo $s["studentName"]?></div>
                                                                        <div class="name-center"> <a href="mailto:<?php echo $s["studentEmail"]?>"><?php echo $s["studentEmail"]?></a> </div>
                                                                    </div>
                                                                    <p><?php echo $s["studentAddress"]?></p>
                                                                    <div>
                                                                        <p><i class="fa fa-phone"></i><a
                                                                                href="tel:<?php echo $s["studentPhone"]?>"><?php echo $s["studentPhone"]?></a></p>
                                                                    </div>
                                                                    <div class="profile-userbuttons">
                                                                        <a href="student_profile.php"
                                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                                            More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } } ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-head">

                                                        <div class="tools">
                                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-6">
                                                                <div class="btn-group">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-6">
                                                                <div class="btn-group pull-right">
                                                                    <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                                            data-bs-toggle="dropdown">Tools
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="fa fa-print"></i> Print </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-scrollable">
                                                            <table
                                                                class="table table-striped table-bordered table-hover table-checkable order-column"
                                                                style="width: 100%" id="example4">
                                                                <thead>
                                                                <tr>
                                                                    <th>
                                                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                                            <input type="checkbox" class="group-checkable"
                                                                                   data-set="#sample_1 .checkboxes" />
                                                                            <span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th> Username </th>
                                                                    <th> Email </th>
                                                                    <th> Status </th>
                                                                    <th> Joined </th>
                                                                    <th> Actions </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach($students as $s){
                                                                    if($s["activeStatus"] == 0){?>
                                                                        <tr class="odd gradeX">
                                                                            <td>
                                                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td> <?php echo $s["studentName"]?> </td>
                                                                            <td>
                                                                                <a href="mailto:<?php echo $s["studentEmail"]?>"> <span class="__cf_email__" ><?php echo $s["studentEmail"]?></span> </a>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-danger"> No Activate </span>
                                                                            </td>
                                                                            <td> <?php echo $s["studentTimestamp"]?> </td>
                                                                            <td class="valigntop">
                                                                                <div class="btn-group">
                                                                                    <button
                                                                                        class="btn btn-xs green-bgcolor dropdown-toggle no-margin"
                                                                                        type="button" data-bs-toggle="dropdown"
                                                                                        aria-expanded="false">
                                                                                        Actions
                                                                                        <i class="fa fa-angle-down"></i>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                                                        <li>
                                                                                            <a href="<?php echo site_url("student/active_student/".$s["studentID"])?>">
                                                                                                <i class="icon-docs"></i> Activate</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:;">
                                                                                                <i class="icon-tag"></i>Delete </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="tel:<?php echo $s["studentPhone"]?>">
                                                                                                <i class="icon-phone"></i> call </a>
                                                                                        </li>
                                                                                        <li class="divider"> </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    <?php }} ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>