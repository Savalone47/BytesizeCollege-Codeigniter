<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <h3>Department Edit</h3>
			<form action='<?php echo site_url('department/edit/').$department['departmentID']?>' method="POST" enctype="multipart/form-data">
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="departmentName" class="control-label"><span class="text-danger">*</span>DepartmentName</label>
						<div class="form-group">
							<input type="text" name="departmentName" value="<?php echo ($this->input->post('departmentName') ? $this->input->post('departmentName') : $department['departmentName']); ?>" class="form-control" id="departmentName" />
							<span class="text-danger"><?php echo form_error('departmentName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="hodID" class="control-label">HodID</label>
						<div class="form-group">
							<input type="text" name="hodID" value="<?php echo ($this->input->post('hodID') ? $this->input->post('hodID') : $department['hodID']); ?>" class="form-control" id="hodID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $department['time_stamp']); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
                    <div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="email" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="departmentName" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
                            <span class="text-danger"><?php echo form_error('password');?></span>
                        </div>
					</div>
					<div class="col-md-6">
						<label for="logo" class="control-label"><span class="text-danger">*</span>logo</label>
						<div class="form-group">
							<input type="file" name="logo" value="<?php echo ($this->input->post('logo') ? $this->input->post('logo') : $department['logo']); ?>" class="form-control" id="logo" />
							<span class="text-danger"><?php echo form_error('logo');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			</form>
		</div>
    </div>
</div>