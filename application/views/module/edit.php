<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3>Module Edit</h3>
            </div>
			<?php echo form_open('module/edit/'.$module['moduleID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="modulePeriod" class="control-label">ModulePeriod</label>
						<div class="form-group">
							<input type="text" name="modulePeriod" value="<?php echo ($this->input->post('modulePeriod') ? $this->input->post('modulePeriod') : $module['modulePeriod']); ?>" class="form-control" id="modulePeriod" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modulePrerequisites" class="control-label">ModulePrerequisites</label>
						<div class="form-group">
							<input type="text" name="modulePrerequisites" value="<?php echo ($this->input->post('modulePrerequisites') ? $this->input->post('modulePrerequisites') : $module['modulePrerequisites']); ?>" class="form-control" id="modulePrerequisites" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleEligible" class="control-label">ModuleEligible</label>
						<div class="form-group">
							<input type="text" name="moduleEligible" value="<?php echo ($this->input->post('moduleEligible') ? $this->input->post('moduleEligible') : $module['moduleEligible']); ?>" class="form-control" id="moduleEligible" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modulePrice" class="control-label">ModulePrice</label>
						<div class="form-group">
							<input type="text" name="modulePrice" value="<?php echo ($this->input->post('modulePrice') ? $this->input->post('modulePrice') : $module['modulePrice']); ?>" class="form-control" id="modulePrice" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleCode" class="control-label">ModuleCode</label>
						<div class="form-group">
							<input type="text" name="moduleCode" value="<?php echo ($this->input->post('moduleCode') ? $this->input->post('moduleCode') : $module['moduleCode']); ?>" class="form-control" id="moduleCode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleFile" class="control-label">ModuleFile</label>
						<div class="form-group">
							<input type="text" name="moduleFile" value="<?php echo ($this->input->post('moduleFile') ? $this->input->post('moduleFile') : $module['moduleFile']); ?>" class="form-control" id="moduleFile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleDate" class="control-label">ModuleDate</label>
						<div class="form-group">
							<input type="text" name="moduleDate" value="<?php echo ($this->input->post('moduleDate') ? $this->input->post('moduleDate') : $module['moduleDate']); ?>" class="has-datetimepicker form-control" id="moduleDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo ($this->input->post('moduleID') ? $this->input->post('moduleID') : $module['moduleID']); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleName" class="control-label">ModuleName</label>
						<div class="form-group">
							<input type="text" name="moduleName" value="<?php echo ($this->input->post('moduleName') ? $this->input->post('moduleName') : $module['moduleName']); ?>" class="form-control" id="moduleName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleType" class="control-label">ModuleType</label>
						<div class="form-group">
							<input type="text" name="moduleType" value="<?php echo ($this->input->post('moduleType') ? $this->input->post('moduleType') : $module['moduleType']); ?>" class="form-control" id="moduleType" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleCourseID" class="control-label">ModuleCourseID</label>
						<div class="form-group">
							<input type="text" name="moduleCourseID" value="<?php echo ($this->input->post('moduleCourseID') ? $this->input->post('moduleCourseID') : $module['moduleCourseID']); ?>" class="form-control" id="moduleCourseID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleLevel" class="control-label">ModuleLevel</label>
						<div class="form-group">
							<input type="text" name="moduleLevel" value="<?php echo ($this->input->post('moduleLevel') ? $this->input->post('moduleLevel') : $module['moduleLevel']); ?>" class="form-control" id="moduleLevel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleCredit" class="control-label">ModuleCredit</label>
						<div class="form-group">
							<input type="text" name="moduleCredit" value="<?php echo ($this->input->post('moduleCredit') ? $this->input->post('moduleCredit') : $module['moduleCredit']); ?>" class="form-control" id="moduleCredit" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleDuration" class="control-label">ModuleDuration</label>
						<div class="form-group">
							<input type="text" name="moduleDuration" value="<?php echo ($this->input->post('moduleDuration') ? $this->input->post('moduleDuration') : $module['moduleDuration']); ?>" class="form-control" id="moduleDuration" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleOverview" class="control-label">ModuleOverview</label>
						<div class="form-group">
							<textarea name="moduleOverview" class="form-control" id="moduleOverview"><?php echo ($this->input->post('moduleOverview') ? $this->input->post('moduleOverview') : $module['moduleOverview']); ?></textarea>
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