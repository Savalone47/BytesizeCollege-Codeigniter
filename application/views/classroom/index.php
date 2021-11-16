<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Classroom Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('classroom/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>RoomID</th>
						<th>RoomOTP</th>
						<th>RoomName</th>
						<th>RoomPin</th>
						<th>UserID</th>
						<th>StudentPin</th>
						<th>ScheduledDate</th>
						<th>StartTime</th>
						<th>EndTime</th>
						<th>Status</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($classroom as $c){ ?>
                    <tr>
						<td><?php echo $c['Id']; ?></td>
						<td><?php echo $c['roomID']; ?></td>
						<td><?php echo $c['roomOTP']; ?></td>
						<td><?php echo $c['roomName']; ?></td>
						<td><?php echo $c['roomPin']; ?></td>
						<td><?php echo $c['userID']; ?></td>
						<td><?php echo $c['studentPin']; ?></td>
						<td><?php echo $c['scheduledDate']; ?></td>
						<td><?php echo $c['startTime']; ?></td>
						<td><?php echo $c['endTime']; ?></td>
						<td><?php echo $c['status']; ?></td>
						<td><?php echo $c['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('classroom/edit/'.$c['Id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('classroom/remove/'.$c['Id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
