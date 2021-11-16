<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Assignedcourses Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('assignedcourse/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CourseAssignedID</th>
						<th>CourseID</th>
						<th>StudentID</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($assignedcourses as $a){ ?>
                    <tr>
						<td><?php echo $a['courseAssignedID']; ?></td>
						<td><?php echo $a['courseID']; ?></td>
						<td><?php echo $a['studentID']; ?></td>
						<td><?php echo $a['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('assignedcourse/edit/'.$a['courseAssignedID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('assignedcourse/remove/'.$a['courseAssignedID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
