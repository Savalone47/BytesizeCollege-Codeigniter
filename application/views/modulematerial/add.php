<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modulematerial Add</h3>
            </div>
            <?php echo form_open('modulematerial/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="moduleName" class="control-label">ModuleName</label>
						<div class="form-group">
							<input type="text" name="moduleName" value="<?php echo $this->input->post('moduleName'); ?>" class="form-control" id="moduleName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleFile" class="control-label">ModuleFile</label>
						<div class="form-group">
							<input type="text" name="moduleFile" value="<?php echo $this->input->post('moduleFile'); ?>" class="form-control" id="moduleFile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userID" class="control-label">UserID</label>
						<div class="form-group">
							<input type="text" name="userID" value="<?php echo $this->input->post('userID'); ?>" class="form-control" id="userID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topicName" class="control-label">TopicName</label>
						<div class="form-group">
							<input type="text" name="topicName" value="<?php echo $this->input->post('topicName'); ?>" class="form-control" id="topicName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo $this->input->post('deleteStatus'); ?>" class="form-control" id="deleteStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
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