<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Learningmaterial Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('learningmaterial/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>MaterialID</th>
						<th>File</th>
						<th>LearningID</th>
						<th>DeleteStatus</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($learningmaterial as $l){ ?>
                    <tr>
						<td><?php echo $l['materialID']; ?></td>
						<td><?php echo $l['file']; ?></td>
						<td><?php echo $l['learningID']; ?></td>
						<td><?php echo $l['deleteStatus']; ?></td>
						<td><?php echo $l['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('learningmaterial/edit/'.$l['materialID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('learningmaterial/remove/'.$l['materialID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
