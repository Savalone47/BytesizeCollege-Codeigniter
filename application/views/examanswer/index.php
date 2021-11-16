<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Examanswer Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('examanswer/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>AnswerID</th>
						<th>ModuleID</th>
						<th>Answer</th>
						<th>ActiveStatus</th>
						<th>Time Stamp</th>
						<th>ExamName</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($examanswer as $e){ ?>
                    <tr>
						<td><?php echo $e['answerID']; ?></td>
						<td><?php echo $e['moduleID']; ?></td>
						<td><?php echo $e['answer']; ?></td>
						<td><?php echo $e['activeStatus']; ?></td>
						<td><?php echo $e['time_stamp']; ?></td>
						<td><?php echo $e['examName']; ?></td>
						<td>
                            <a href="<?php echo site_url('examanswer/edit/'.$e['answerID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('examanswer/remove/'.$e['answerID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
