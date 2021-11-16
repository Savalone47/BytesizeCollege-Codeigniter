<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Userlog Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('userlog/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>UserID</th>
						<th>LogID</th>
						<th>UserType</th>
						<th>UserIP</th>
						<th>LoginTime</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($userlog as $u){ ?>
                    <tr>
						<td><?php echo $u['userID']; ?></td>
						<td><?php echo $u['logID']; ?></td>
						<td><?php echo $u['userType']; ?></td>
						<td><?php echo $u['userIP']; ?></td>
						<td><?php echo $u['loginTime']; ?></td>
						<td>
                            <a href="<?php echo site_url('userlog/edit/'.$u['userID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('userlog/remove/'.$u['userID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
