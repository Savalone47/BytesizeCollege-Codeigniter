<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Feedback Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('feedback/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>FacilitatorID</th>
						<th>ModuleID</th>
						<th>Marks</th>
						<th>TopicID</th>
						<th>StudentID</th>
						<th>Feedback</th>
						<th>FeedbackType</th>
						<th>Time Stamp</th>
						<th>Feedback2</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($feedback as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['facilitatorID']; ?></td>
						<td><?php echo $f['moduleID']; ?></td>
						<td><?php echo $f['marks']; ?></td>
						<td><?php echo $f['topicID']; ?></td>
						<td><?php echo $f['studentID']; ?></td>
						<td><?php echo $f['feedback']; ?></td>
						<td><?php echo $f['feedbackType']; ?></td>
						<td><?php echo $f['time_stamp']; ?></td>
						<td><?php echo $f['feedback2']; ?></td>
						<td>
                            <a href="<?php echo site_url('feedback/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('feedback/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
