<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Parentinfo Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('parentinfo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ParentID</th>
						<th>StudentID</th>
						<th>KinName</th>
						<th>Relationship</th>
						<th>KinPhone</th>
						<th>KinCellPhone</th>
						<th>KinAddress</th>
						<th>SchoolName</th>
						<th>Qualification</th>
						<th>Year</th>
						<th>CourseEnd</th>
						<th>DateCreated</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($parentinfo as $p){ ?>
                    <tr>
						<td><?php echo $p['parentID']; ?></td>
						<td><?php echo $p['studentID']; ?></td>
						<td><?php echo $p['kinName']; ?></td>
						<td><?php echo $p['relationship']; ?></td>
						<td><?php echo $p['kinPhone']; ?></td>
						<td><?php echo $p['kinCellPhone']; ?></td>
						<td><?php echo $p['kinAddress']; ?></td>
						<td><?php echo $p['schoolName']; ?></td>
						<td><?php echo $p['qualification']; ?></td>
						<td><?php echo $p['year']; ?></td>
						<td><?php echo $p['courseEnd']; ?></td>
						<td><?php echo $p['dateCreated']; ?></td>
						<td>
                            <a href="<?php echo site_url('parentinfo/edit/'.$p['parentID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('parentinfo/remove/'.$p['parentID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
