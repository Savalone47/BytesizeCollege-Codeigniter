<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lessontopic Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lessontopic/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>TopicID</th>
						<th>ModuleID</th>
						<th>TopicName</th>
						<th>TopicAssignment</th>
						<th>LessonTopicStatus</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lessontopic as $l){ ?>
                    <tr>
						<td><?php echo $l['topicID']; ?></td>
						<td><?php echo $l['moduleID']; ?></td>
						<td><?php echo $l['topicName']; ?></td>
						<td><?php echo $l['topicAssignment']; ?></td>
						<td><?php echo $l['lessonTopicStatus']; ?></td>
						<td><?php echo $l['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('lessontopic/edit/'.$l['topicID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lessontopic/remove/'.$l['topicID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
