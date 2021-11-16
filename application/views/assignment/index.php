<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Assignment Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('assignment/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Assignment</th>
						<th>AssignmentNo</th>
						<th>Marks</th>
						<th>TopicName</th>
						<th>DueDate</th>
						<th>ModuleID</th>
						<th>FacilitatorID</th>
						<th>DeleteStatus</th>
						<th>Time Stamp</th>
						<th>Comment</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($assignment as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['assignment']; ?></td>
						<td><?php echo $a['assignmentNo']; ?></td>
						<td><?php echo $a['marks']; ?></td>
						<td><?php echo $a['topicName']; ?></td>
						<td><?php echo $a['dueDate']; ?></td>
						<td><?php echo $a['moduleID']; ?></td>
						<td><?php echo $a['facilitatorID']; ?></td>
						<td><?php echo $a['deleteStatus']; ?></td>
						<td><?php echo $a['time_stamp']; ?></td>
						<td><?php echo $a['comment']; ?></td>
						<td>
                            <a href="<?php echo site_url('assignment/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('assignment/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
