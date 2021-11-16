<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Assignmentreply Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('assignmentreply/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>ModuleID</th>
						<th>AssignmentID</th>
						<th>StudentID</th>
						<th>AssignmentRef</th>
						<th>Reply</th>
						<th>DeleteStatus</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($assignmentreply as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['moduleID']; ?></td>
						<td><?php echo $a['assignmentID']; ?></td>
						<td><?php echo $a['studentID']; ?></td>
						<td><?php echo $a['assignmentRef']; ?></td>
						<td><?php echo $a['reply']; ?></td>
						<td><?php echo $a['deleteStatus']; ?></td>
						<td><?php echo $a['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('assignmentreply/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('assignmentreply/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
