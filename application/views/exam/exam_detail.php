<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Exam of module</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="<?=base_url('course/index')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item"
                           href="all_exam.php">Module</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Exams</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6">

                    <br>
                    <br>
                </div>
            </div>
            <br>
            <div class="row">
                <?php foreach($exam as $e){?>
                    <div class="col-md-4">
                        <div class="card card-topline-aqua">
                            <div class="card-body no-padding dropdown dropdown-extended dropdown-notification">
                                <div class="doctor-profile">
                                    <?php foreach ($exam as $e):?>
                                        <div class="profile-usertitle">
                                            <div class="doctor-name txt" style="font-size: 15px"> <?php echo $e['title']?> </div>
                                            <div class="doctor-name" style="font-size: 12px;text-align: left;">
                                                Exam Mark:
                                                <span style="float: right;"><?php echo $e["marks"]?></span></div>
                                            <div class="name-center" style="font-size: 10px;text-align: left;">Exam Date
                                                <span style="float: right">
                                            <?php echo $e["date"]?>												</span>
                                            </div>
                                            <div class="name-center" style="font-size: 10px;text-align: left;">Exam Time
                                                <span style="float: right"><?php echo $e["start"]?></span>

                                            </div>
                                            <div class="name-center" style="font-size: 10px;text-align: left;">Exam Duration
                                                <span style="float: right">
                                            <?php
                                            $secs = strtotime($e["end"])-strtotime("00:00:00");
                                            $result = date("H",strtotime($e["start"])+$secs);
                                            echo $result ?> h
                                                </span>

                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="<?php echo site_url("exam/detailExamForStudent/".$e["id"]."/".$e["moduleID"])?>" class="btn btn-circle deepPink-bgcolor btn-sm">View Replies</a>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->