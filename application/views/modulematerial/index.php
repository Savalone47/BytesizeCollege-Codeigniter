<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Modulematerial Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('modulematerial/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ModuleID</th>
						<th>ModuleName</th>
						<th>ModuleFile</th>
						<th>UserID</th>
						<th>TopicName</th>
						<th>DeleteStatus</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($modulematerial as $m){ ?>
                    <tr>
						<td><?php echo $m['moduleID']; ?></td>
						<td><?php echo $m['moduleName']; ?></td>
						<td><?php echo $m['moduleFile']; ?></td>
						<td><?php echo $m['userID']; ?></td>
						<td><?php echo $m['topicName']; ?></td>
						<td><?php echo $m['deleteStatus']; ?></td>
						<td><?php echo $m['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('modulematerial/edit/'.$m['moduleID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('modulematerial/remove/'.$m['moduleID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
