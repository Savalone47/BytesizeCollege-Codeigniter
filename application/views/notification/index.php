<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Notification Listing</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="<?php echo site_url('course/report'); ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Notifications</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <ul class="nav customtab nav-tabs" role="tablist">
                        <div class="btn-group">
                            <a href="<?php echo site_url('notification/add');?>" id="addRow"
                               class="btn btn-info">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab2">
                            <div class="row">
                                <?php foreach($notification as $n): ?>
                                <div class="col-md-4">
                                    <div class="card card-box">
                                        <div class="card-body no-padding ">
                                            <div class="doctor-profile">
                                                <div class="profile-usertitle">
                                                    <div class="doctor-name"><?php echo $n['title'];?></div>
                                                    <div class="name-center"><?php echo $n['author'];?></div>
                                                    <di class="name-center"><?php echo $n['created_at']; ?></di>
                                                </div>
                                                <div class="profile-userbuttons">
                                                    <a href="<?php echo site_url('notification/notice_detail/'.$n['id']);?>"
                                                       class="btn btn-circle blue-bgcolor btn-sm">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->