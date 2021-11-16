<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Topic Edit</h3>
            </div>
			<?php echo form_open('topic/edit/'.$topic['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo ($this->input->post('moduleID') ? $this->input->post('moduleID') : $topic['moduleID']); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topicName" class="control-label">TopicName</label>
						<div class="form-group">
							<input type="text" name="topicName" value="<?php echo ($this->input->post('topicName') ? $this->input->post('topicName') : $topic['topicName']); ?>" class="form-control" id="topicName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="extra" class="control-label">Extra</label>
						<div class="form-group">
							<input type="text" name="extra" value="<?php echo ($this->input->post('extra') ? $this->input->post('extra') : $topic['extra']); ?>" class="form-control" id="extra" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo ($this->input->post('deleteStatus') ? $this->input->post('deleteStatus') : $topic['deleteStatus']); ?>" class="form-control" id="deleteStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $topic['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $topic['time_stamp']); ?>" class="form-control" id="time_stamp" />
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