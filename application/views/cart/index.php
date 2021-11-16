<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cart Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cart/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CartID</th>
						<th>UserID</th>
						<th>ModuleID</th>
						<th>Time Stamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cart as $c){ ?>
                    <tr>
						<td><?php echo $c['cartID']; ?></td>
						<td><?php echo $c['userID']; ?></td>
						<td><?php echo $c['moduleID']; ?></td>
						<td><?php echo $c['time_stamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('cart/edit/'.$c['cartID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('cart/remove/'.$c['cartID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
