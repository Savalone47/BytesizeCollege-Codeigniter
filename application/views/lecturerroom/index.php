<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lecturerroom Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lecturerroom/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>DepartmentID</th>
						<th>Name</th>
						<th>DateCreated</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lecturerroom as $l){ ?>
                    <tr>
						<td><?php echo $l['ID']; ?></td>
						<td><?php echo $l['departmentID']; ?></td>
						<td><?php echo $l['name']; ?></td>
						<td><?php echo $l['dateCreated']; ?></td>
						<td>
                            <a href="<?php echo site_url('lecturerroom/edit/'.$l['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lecturerroom/remove/'.$l['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
