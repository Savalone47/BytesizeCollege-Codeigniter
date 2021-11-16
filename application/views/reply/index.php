<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reply Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reply/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>StudentID</th>
						<th>FacilitatorID</th>
						<th>DiscussionID</th>
						<th>TopicID</th>
						<th>ModuleID</th>
						<th>Marks</th>
						<th>Reply</th>
						<th>FileType</th>
						<th>Time Stamp</th>
						<th>Reply2</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reply as $r){ ?>
                    <tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['studentID']; ?></td>
						<td><?php echo $r['facilitatorID']; ?></td>
						<td><?php echo $r['discussionID']; ?></td>
						<td><?php echo $r['topicID']; ?></td>
						<td><?php echo $r['moduleID']; ?></td>
						<td><?php echo $r['marks']; ?></td>
						<td><?php echo $r['reply']; ?></td>
						<td><?php echo $r['fileType']; ?></td>
						<td><?php echo $r['time_stamp']; ?></td>
						<td><?php echo $r['reply2']; ?></td>
						<td>
                            <a href="<?php echo site_url('reply/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('reply/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
