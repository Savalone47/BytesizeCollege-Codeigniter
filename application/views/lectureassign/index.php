<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lectureassigns Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lectureassign/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>AssigneeID</th>
						<th>LectureID</th>
						<th>ModuleID</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lectureassigns as $l){ ?>
                    <tr>
						<td><?php echo $l['AssigneeID']; ?></td>
						<td><?php echo $l['lectureID']; ?></td>
						<td><?php echo $l['moduleID']; ?></td>
						<td><?php echo $l['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('lectureassign/edit/'.$l['AssigneeID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lectureassign/remove/'.$l['AssigneeID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
