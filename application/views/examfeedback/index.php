<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Examfeedback Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('examfeedback/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>ModuleID</th>
						<th>ExamID</th>
						<th>StudentID</th>
						<th>CourseManager</th>
						<th>Feedback</th>
						<th>Feedback2</th>
						<th>Feedback3</th>
						<th>Grade</th>
						<th>Marks</th>
						<th>Paper</th>
						<th>Status</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($examfeedback as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['moduleID']; ?></td>
						<td><?php echo $e['examID']; ?></td>
						<td><?php echo $e['studentID']; ?></td>
						<td><?php echo $e['courseManager']; ?></td>
						<td><?php echo $e['feedback']; ?></td>
						<td><?php echo $e['feedback2']; ?></td>
						<td><?php echo $e['feedback3']; ?></td>
						<td><?php echo $e['grade']; ?></td>
						<td><?php echo $e['marks']; ?></td>
						<td><?php echo $e['paper']; ?></td>
						<td><?php echo $e['status']; ?></td>
						<td><?php echo $e['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('examfeedback/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('examfeedback/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
