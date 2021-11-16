<!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Notifications</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="<?php echo site_url('course/index');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a class="parent-item"
                               href="<?php echo site_url('notification/index');?>">All Notifications</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Notifications</li>
                    </ol>
                </div>
            </div>
            <?php foreach ($notification as $n): ?>
            <div class="row">
                <div class="card">
                    <div class="notification-ui_dd-content">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_content">
                                <div class="notification-list_detail">
                                    <p><b class="bold-muted underline"><?php echo $n['title']?></b></p>
                                    <p><small><?php echo $n['author'];?></small></p>
                                    <p class="text-muted"><?php echo $n['notification']?></p>
                                    <p class="text-muted"><small><i class="fa  fa-calendar"></i>&nbsp;&nbsp; <?php echo $n['created_at']?></small></p>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo site_url('notification/edit/'.$n['id']);?>"
                                class="btn btn-circle blue-bgcolor btn-sm">Edit</a>

                       <a href="<?php echo site_url('notification/remove/'.$n['id']);?>"
                           class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash-o "></i>Delete</a>

                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <!-- end page content -->