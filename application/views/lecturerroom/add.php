<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lecturerroom Add</h3>
            </div>
            <?php echo form_open('lecturerroom/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="departmentID" class="control-label">DepartmentID</label>
						<div class="form-group">
							<input type="text" name="departmentID" value="<?php echo $this->input->post('departmentID'); ?>" class="form-control" id="departmentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateCreated" class="control-label">DateCreated</label>
						<div class="form-group">
							<input type="text" name="dateCreated" value="<?php echo $this->input->post('dateCreated'); ?>" class="has-datetimepicker form-control" id="dateCreated" />
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