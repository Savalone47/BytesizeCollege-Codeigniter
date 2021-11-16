<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Parentinfo Edit</h3>
            </div>
			<?php echo form_open('parentinfo/edit/'.$parentinfo['parentID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="studentID" class="control-label">StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo ($this->input->post('studentID') ? $this->input->post('studentID') : $parentinfo['studentID']); ?>" class="form-control" id="studentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kinName" class="control-label">KinName</label>
						<div class="form-group">
							<input type="text" name="kinName" value="<?php echo ($this->input->post('kinName') ? $this->input->post('kinName') : $parentinfo['kinName']); ?>" class="form-control" id="kinName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="relationship" class="control-label">Relationship</label>
						<div class="form-group">
							<input type="text" name="relationship" value="<?php echo ($this->input->post('relationship') ? $this->input->post('relationship') : $parentinfo['relationship']); ?>" class="form-control" id="relationship" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kinPhone" class="control-label">KinPhone</label>
						<div class="form-group">
							<input type="text" name="kinPhone" value="<?php echo ($this->input->post('kinPhone') ? $this->input->post('kinPhone') : $parentinfo['kinPhone']); ?>" class="form-control" id="kinPhone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kinCellPhone" class="control-label">KinCellPhone</label>
						<div class="form-group">
							<input type="text" name="kinCellPhone" value="<?php echo ($this->input->post('kinCellPhone') ? $this->input->post('kinCellPhone') : $parentinfo['kinCellPhone']); ?>" class="form-control" id="kinCellPhone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kinAddress" class="control-label">KinAddress</label>
						<div class="form-group">
							<input type="text" name="kinAddress" value="<?php echo ($this->input->post('kinAddress') ? $this->input->post('kinAddress') : $parentinfo['kinAddress']); ?>" class="form-control" id="kinAddress" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="schoolName" class="control-label">SchoolName</label>
						<div class="form-group">
							<input type="text" name="schoolName" value="<?php echo ($this->input->post('schoolName') ? $this->input->post('schoolName') : $parentinfo['schoolName']); ?>" class="form-control" id="schoolName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qualification" class="control-label">Qualification</label>
						<div class="form-group">
							<input type="text" name="qualification" value="<?php echo ($this->input->post('qualification') ? $this->input->post('qualification') : $parentinfo['qualification']); ?>" class="form-control" id="qualification" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label">Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $parentinfo['year']); ?>" class="form-control" id="year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseEnd" class="control-label">CourseEnd</label>
						<div class="form-group">
							<input type="text" name="courseEnd" value="<?php echo ($this->input->post('courseEnd') ? $this->input->post('courseEnd') : $parentinfo['courseEnd']); ?>" class="form-control" id="courseEnd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateCreated" class="control-label">DateCreated</label>
						<div class="form-group">
							<input type="text" name="dateCreated" value="<?php echo ($this->input->post('dateCreated') ? $this->input->post('dateCreated') : $parentinfo['dateCreated']); ?>" class="has-datetimepicker form-control" id="dateCreated" />
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