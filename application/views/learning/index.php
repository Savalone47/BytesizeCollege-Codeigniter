<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Learning Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('learning/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>LearningID</th>
						<th>LearningTopic</th>
						<th>ModuleID</th>
						<th>Time Stamp</th>
						<th>DeleteStatus</th>
						<th>LearningName</th>
						<th>Comment</th>
						<th>Link</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($learning as $l){ ?>
                    <tr>
						<td><?php echo $l['learningID']; ?></td>
						<td><?php echo $l['learningTopic']; ?></td>
						<td><?php echo $l['moduleID']; ?></td>
						<td><?php echo $l['time_stamp']; ?></td>
						<td><?php echo $l['deleteStatus']; ?></td>
						<td><?php echo $l['learningName']; ?></td>
						<td><?php echo $l['comment']; ?></td>
						<td><?php echo $l['link']; ?></td>
						<td>
                            <a href="<?php echo site_url('learning/edit/'.$l['learningID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('learning/remove/'.$l['learningID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
