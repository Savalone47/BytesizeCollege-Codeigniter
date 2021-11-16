<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Community Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('community/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>StudentID</th>
						<th>ModuleID</th>
						<th>FacilitatorID</th>
						<th>Discussion</th>
						<th>Discussion2</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($community as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['studentID']; ?></td>
						<td><?php echo $c['moduleID']; ?></td>
						<td><?php echo $c['facilitatorID']; ?></td>
						<td><?php echo $c['discussion']; ?></td>
						<td><?php echo $c['discussion2']; ?></td>
						<td><?php echo $c['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('community/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('community/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
