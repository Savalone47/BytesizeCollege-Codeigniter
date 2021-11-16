<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Topics Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('topic/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>ModuleID</th>
						<th>TopicName</th>
						<th>Extra</th>
						<th>DeleteStatus</th>
						<th>Status</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($topics as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['moduleID']; ?></td>
						<td><?php echo $t['topicName']; ?></td>
						<td><?php echo $t['extra']; ?></td>
						<td><?php echo $t['deleteStatus']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('topic/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('topic/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
