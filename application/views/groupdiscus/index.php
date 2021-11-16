<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Groupdiscuss Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('groupdiscus/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>TopicID</th>
						<th>StudentID</th>
						<th>FacilitatorID</th>
						<th>Chapter</th>
						<th>ModuleID</th>
						<th>Time Stamp</th>
						<th>Discussion</th>
						<th>Discussion2</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($groupdiscuss as $g){ ?>
                    <tr>
						<td><?php echo $g['id']; ?></td>
						<td><?php echo $g['topicID']; ?></td>
						<td><?php echo $g['studentID']; ?></td>
						<td><?php echo $g['facilitatorID']; ?></td>
						<td><?php echo $g['chapter']; ?></td>
						<td><?php echo $g['moduleID']; ?></td>
						<td><?php echo $g['time_stamp']; ?></td>
						<td><?php echo $g['discussion']; ?></td>
						<td><?php echo $g['discussion2']; ?></td>
						<td>
                            <a href="<?php echo site_url('groupdiscus/edit/'.$g['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('groupdiscus/remove/'.$g['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
