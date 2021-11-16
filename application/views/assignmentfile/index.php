<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Assignmentfiles Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('assignmentfile/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>FileID</th>
						<th>AssignmentID</th>
						<th>StudentID</th>
						<th>File</th>
						<th>DeleteStatus</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($assignmentfiles as $a){ ?>
                    <tr>
						<td><?php echo $a['fileID']; ?></td>
						<td><?php echo $a['assignmentID']; ?></td>
						<td><?php echo $a['studentID']; ?></td>
						<td><?php echo $a['file']; ?></td>
						<td><?php echo $a['deleteStatus']; ?></td>
						<td><?php echo $a['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('assignmentfile/edit/'.$a['fileID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('assignmentfile/remove/'.$a['fileID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
