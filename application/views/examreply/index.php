<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Examreply Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('examreply/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>CourseID</th>
						<th>ModuleID</th>
						<th>ExamID</th>
						<th>Exam</th>
						<th>Paper</th>
						<th>StudentID</th>
						<th>DeleteStatus</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($examreply as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['courseID']; ?></td>
						<td><?php echo $e['moduleID']; ?></td>
						<td><?php echo $e['examID']; ?></td>
						<td><?php echo $e['exam']; ?></td>
						<td><?php echo $e['paper']; ?></td>
						<td><?php echo $e['studentID']; ?></td>
						<td><?php echo $e['deleteStatus']; ?></td>
						<td><?php echo $e['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('examreply/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('examreply/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
