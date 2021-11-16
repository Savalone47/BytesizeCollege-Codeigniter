<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Groupdiscus Edit</h3>
            </div>
			<?php echo form_open('groupdiscus/edit/'.$groupdiscus['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="topicID" class="control-label">TopicID</label>
						<div class="form-group">
							<input type="text" name="topicID" value="<?php echo ($this->input->post('topicID') ? $this->input->post('topicID') : $groupdiscus['topicID']); ?>" class="form-control" id="topicID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo ($this->input->post('studentID') ? $this->input->post('studentID') : $groupdiscus['studentID']); ?>" class="form-control" id="studentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="facilitatorID" class="control-label">FacilitatorID</label>
						<div class="form-group">
							<input type="text" name="facilitatorID" value="<?php echo ($this->input->post('facilitatorID') ? $this->input->post('facilitatorID') : $groupdiscus['facilitatorID']); ?>" class="form-control" id="facilitatorID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="chapter" class="control-label">Chapter</label>
						<div class="form-group">
							<input type="text" name="chapter" value="<?php echo ($this->input->post('chapter') ? $this->input->post('chapter') : $groupdiscus['chapter']); ?>" class="form-control" id="chapter" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo ($this->input->post('moduleID') ? $this->input->post('moduleID') : $groupdiscus['moduleID']); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $groupdiscus['time_stamp']); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="discussion" class="control-label">Discussion</label>
						<div class="form-group">
							<textarea name="discussion" class="form-control" id="discussion"><?php echo ($this->input->post('discussion') ? $this->input->post('discussion') : $groupdiscus['discussion']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="discussion2" class="control-label">Discussion2</label>
						<div class="form-group">
							<textarea name="discussion2" class="form-control" id="discussion2"><?php echo ($this->input->post('discussion2') ? $this->input->post('discussion2') : $groupdiscus['discussion2']); ?></textarea>
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