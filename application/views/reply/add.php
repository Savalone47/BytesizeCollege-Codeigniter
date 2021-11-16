<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Reply Add</h3>
            </div>
            <?php echo form_open('reply/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="studentID" class="control-label">StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo $this->input->post('studentID'); ?>" class="form-control" id="studentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="facilitatorID" class="control-label">FacilitatorID</label>
						<div class="form-group">
							<input type="text" name="facilitatorID" value="<?php echo $this->input->post('facilitatorID'); ?>" class="form-control" id="facilitatorID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="discussionID" class="control-label">DiscussionID</label>
						<div class="form-group">
							<input type="text" name="discussionID" value="<?php echo $this->input->post('discussionID'); ?>" class="form-control" id="discussionID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topicID" class="control-label">TopicID</label>
						<div class="form-group">
							<input type="text" name="topicID" value="<?php echo $this->input->post('topicID'); ?>" class="form-control" id="topicID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo $this->input->post('moduleID'); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marks" class="control-label">Marks</label>
						<div class="form-group">
							<input type="text" name="marks" value="<?php echo $this->input->post('marks'); ?>" class="form-control" id="marks" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply" class="control-label">Reply</label>
						<div class="form-group">
							<input type="text" name="reply" value="<?php echo $this->input->post('reply'); ?>" class="form-control" id="reply" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fileType" class="control-label">FileType</label>
						<div class="form-group">
							<input type="text" name="fileType" value="<?php echo $this->input->post('fileType'); ?>" class="form-control" id="fileType" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply2" class="control-label">Reply2</label>
						<div class="form-group">
							<textarea name="reply2" class="form-control" id="reply2"><?php echo $this->input->post('reply2'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>