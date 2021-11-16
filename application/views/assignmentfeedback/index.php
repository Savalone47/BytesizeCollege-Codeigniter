<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Assignmentfeedback Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('assignmentfeedback/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>ModuleID</th>
						<th>StudentID</th>
						<th>AdminID</th>
						<th>AssignmentID</th>
						<th>Total</th>
						<th>Grade</th>
						<th>Status</th>
						<th>Comment</th>
						<th>Time Stamp</th>
						<th>Feedback</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($assignmentfeedback as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['moduleID']; ?></td>
						<td><?php echo $a['studentID']; ?></td>
						<td><?php echo $a['adminID']; ?></td>
						<td><?php echo $a['assignmentID']; ?></td>
						<td><?php echo $a['total']; ?></td>
						<td><?php echo $a['grade']; ?></td>
						<td><?php echo $a['status']; ?></td>
						<td><?php echo $a['comment']; ?></td>
						<td><?php echo $a['time_stamp']; ?></td>
						<td><?php echo $a['feedback']; ?></td>
						<td>
                            <a href="<?php echo site_url('assignmentfeedback/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('assignmentfeedback/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
