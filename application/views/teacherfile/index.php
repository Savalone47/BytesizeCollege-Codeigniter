<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Teacherfiles Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('teacherfile/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>FileID</th>
						<th>AssignmentID</th>
						<th>LectureID</th>
						<th>File</th>
						<th>DeleteStatus</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($teacherfiles as $t){ ?>
                    <tr>
						<td><?php echo $t['fileID']; ?></td>
						<td><?php echo $t['assignmentID']; ?></td>
						<td><?php echo $t['lectureID']; ?></td>
						<td><?php echo $t['file']; ?></td>
						<td><?php echo $t['deleteStatus']; ?></td>
						<td><?php echo $t['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('teacherfile/edit/'.$t['fileID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('teacherfile/remove/'.$t['fileID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
