<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Events Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('events_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Title</th>
						<th>ClassName</th>
						<th>Start</th>
						<th>End</th>
						<th>Details</th>
						<th>Created At</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($events_table as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['title']; ?></td>
						<td><?php echo $e['className']; ?></td>
						<td><?php echo $e['start']; ?></td>
						<td><?php echo $e['end']; ?></td>
						<td><?php echo $e['details']; ?></td>
						<td><?php echo $e['created_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('events_table/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('events_table/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
