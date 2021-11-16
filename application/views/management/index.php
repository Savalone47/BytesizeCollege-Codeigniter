<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Management Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('management/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ManagementID</th>
						<th>ManagementName</th>
						<th>LastName</th>
						<th>Title</th>
						<th>ManagementEmail</th>
						<th>ManagementContact</th>
						<th>ManagementPassword</th>
						<th>ManagementPhoto</th>
						<th>ManagementLevel</th>
						<th>Otp</th>
						<th>Address</th>
						<th>SecurityAns</th>
						<th>ManagementStatus</th>
						<th>Gender</th>
						<th>Programme</th>
						<th>ManagementBio</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($management as $m){ ?>
                    <tr>
						<td><?php echo $m['managementID']; ?></td>
						<td><?php echo $m['managementName']; ?></td>
						<td><?php echo $m['lastName']; ?></td>
						<td><?php echo $m['title']; ?></td>
						<td><?php echo $m['managementEmail']; ?></td>
						<td><?php echo $m['managementContact']; ?></td>
						<td><?php echo $m['managementPassword']; ?></td>
						<td><?php echo $m['managementPhoto']; ?></td>
						<td><?php echo $m['managementLevel']; ?></td>
						<td><?php echo $m['otp']; ?></td>
						<td><?php echo $m['address']; ?></td>
						<td><?php echo $m['securityAns']; ?></td>
						<td><?php echo $m['managementStatus']; ?></td>
						<td><?php echo $m['gender']; ?></td>
						<td><?php echo $m['programme']; ?></td>
						<td><?php echo $m['managementBio']; ?></td>
						<td>
                            <a href="<?php echo site_url('management/edit/'.$m['managementID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('management/remove/'.$m['managementID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
