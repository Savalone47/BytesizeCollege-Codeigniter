<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Viewednotification Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('viewednotification/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>UserID</th>
						<th>UserType</th>
						<th>NotificationID</th>
						<th>DateViewed</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($viewednotification as $v){ ?>
                    <tr>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['userID']; ?></td>
						<td><?php echo $v['userType']; ?></td>
						<td><?php echo $v['notificationID']; ?></td>
						<td><?php echo $v['dateViewed']; ?></td>
						<td>
                            <a href="<?php echo site_url('viewednotification/edit/'.$v['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('viewednotification/remove/'.$v['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
