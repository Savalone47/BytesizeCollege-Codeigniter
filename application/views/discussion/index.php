<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Discussion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('discussion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>DiscussionID</th>
						<th>TopicID</th>
						<th>ModuleID</th>
						<th>StudentID</th>
						<th>Instruction</th>
						<th>DueDate</th>
						<th>FacilitatorID</th>
						<th>FacilitatorID2</th>
						<th>AcademicID</th>
						<th>Time Stamp</th>
						<th>Marks</th>
						<th>Discussion</th>
						<th>Discussion2</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($discussion as $d){ ?>
                    <tr>
						<td><?php echo $d['discussionID']; ?></td>
						<td><?php echo $d['topicID']; ?></td>
						<td><?php echo $d['moduleID']; ?></td>
						<td><?php echo $d['studentID']; ?></td>
						<td><?php echo $d['instruction']; ?></td>
						<td><?php echo $d['dueDate']; ?></td>
						<td><?php echo $d['facilitatorID']; ?></td>
						<td><?php echo $d['facilitatorID2']; ?></td>
						<td><?php echo $d['academicID']; ?></td>
						<td><?php echo $d['time_stamp']; ?></td>
						<td><?php echo $d['marks']; ?></td>
						<td><?php echo $d['discussion']; ?></td>
						<td><?php echo $d['discussion2']; ?></td>
						<td>
                            <a href="<?php echo site_url('discussion/edit/'.$d['discussionID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('discussion/remove/'.$d['discussionID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
