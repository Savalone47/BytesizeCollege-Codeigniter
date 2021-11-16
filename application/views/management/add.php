<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Management Add</h3>
            </div>
            <?php echo form_open('management/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="managementName" class="control-label">ManagementName</label>
						<div class="form-group">
							<input type="text" name="managementName" value="<?php echo $this->input->post('managementName'); ?>" class="form-control" id="managementName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lastName" class="control-label">LastName</label>
						<div class="form-group">
							<input type="text" name="lastName" value="<?php echo $this->input->post('lastName'); ?>" class="form-control" id="lastName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo $this->input->post('title'); ?>" class="form-control" id="title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="managementEmail" class="control-label">ManagementEmail</label>
						<div class="form-group">
							<input type="text" name="managementEmail" value="<?php echo $this->input->post('managementEmail'); ?>" class="form-control" id="managementEmail" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="managementContact" class="control-label">ManagementContact</label>
						<div class="form-group">
							<input type="text" name="managementContact" value="<?php echo $this->input->post('managementContact'); ?>" class="form-control" id="managementContact" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="managementPassword" class="control-label">ManagementPassword</label>
						<div class="form-group">
							<input type="text" name="managementPassword" value="<?php echo $this->input->post('managementPassword'); ?>" class="form-control" id="managementPassword" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="managementPhoto" class="control-label">ManagementPhoto</label>
						<div class="form-group">
							<input type="text" name="managementPhoto" value="<?php echo $this->input->post('managementPhoto'); ?>" class="form-control" id="managementPhoto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="managementLevel" class="control-label">ManagementLevel</label>
						<div class="form-group">
							<input type="text" name="managementLevel" value="<?php echo $this->input->post('managementLevel'); ?>" class="form-control" id="managementLevel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="otp" class="control-label">Otp</label>
						<div class="form-group">
							<input type="text" name="otp" value="<?php echo $this->input->post('otp'); ?>" class="form-control" id="otp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="securityAns" class="control-label">SecurityAns</label>
						<div class="form-group">
							<input type="text" name="securityAns" value="<?php echo $this->input->post('securityAns'); ?>" class="form-control" id="securityAns" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="managementStatus" class="control-label">ManagementStatus</label>
						<div class="form-group">
							<input type="text" name="managementStatus" value="<?php echo $this->input->post('managementStatus'); ?>" class="form-control" id="managementStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label">Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" class="form-control" id="gender" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="programme" class="control-label">Programme</label>
						<div class="form-group">
							<input type="text" name="programme" value="<?php echo $this->input->post('programme'); ?>" class="form-control" id="programme" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="managementBio" class="control-label">ManagementBio</label>
						<div class="form-group">
							<textarea name="managementBio" class="form-control" id="managementBio"><?php echo $this->input->post('managementBio'); ?></textarea>
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