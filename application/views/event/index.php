<div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Event</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="<?=base_url('course/index')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Event</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <ul class="nav customtab nav-tabs" role="tablist">
                            <div class="btn-group">
                                <a href="<?=base_url('event/add')?>" id="addRow"
                                   class="btn btn-info">
                                    Add New <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab2">
                                <div class="row">
                                <?php foreach($events as $e){ ?>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="<?php echo site_url("resources/assets_admin/img/std/std10.jpg")?>"
                                                         class="doctor-pic"
                                                         alt="">
                                                    <!--<div><?php echo $e['eventImage'];?></div>-->
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name"><?php echo $e["eventTitle"]?></div>
                                                    </div>
                                                    <p><?php echo $e["eventstatTime"]?>-<?php echo $e["eventendTime"]?></p>
                                                    <p><?php echo $e["eventDescription"]?></p>
                                                    <p><?php echo $e["eventLocation"]?></p>

                                                    <a href="<?php echo site_url('event/remove/'.$e['eventID']);?>"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Delete</a>

                                                    <a href="<?php echo site_url('event/edit/'.$e['eventID']);?>"
                                                           class="btn btn-circle blue-bgcolor btn-sm">Edit</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>