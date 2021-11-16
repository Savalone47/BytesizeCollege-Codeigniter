<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Userlog Edit</h3>
            </div>
			<?php echo form_open('userlog/edit/'.$userlog['userID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="logID" class="control-label">LogID</label>
						<div class="form-group">
							<input type="text" name="logID" value="<?php echo ($this->input->post('logID') ? $this->input->post('logID') : $userlog['logID']); ?>" class="form-control" id="logID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userType" class="control-label">UserType</label>
						<div class="form-group">
							<input type="text" name="userType" value="<?php echo ($this->input->post('userType') ? $this->input->post('userType') : $userlog['userType']); ?>" class="form-control" id="userType" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userIP" class="control-label">UserIP</label>
						<div class="form-group">
							<input type="text" name="userIP" value="<?php echo ($this->input->post('userIP') ? $this->input->post('userIP') : $userlog['userIP']); ?>" class="form-control" id="userIP" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="loginTime" class="control-label">LoginTime</label>
						<div class="form-group">
							<input type="text" name="loginTime" value="<?php echo ($this->input->post('loginTime') ? $this->input->post('loginTime') : $userlog['loginTime']); ?>" class="has-datetimepicker form-control" id="loginTime" />
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