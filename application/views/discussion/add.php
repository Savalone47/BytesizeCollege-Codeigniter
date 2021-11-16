<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Discussion Add</h3>
            </div>
            <?php echo form_open('discussion/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="topicID" class="control-label">Topic</label>
						<div class="form-group">
							<select name="topicID" class="form-control">
								<option value="">select topic</option>
								<?php 
								foreach($all_topics as $topic)
								{
									$selected = ($topic['id'] == $this->input->post('topicID')) ? ' selected="selected"' : "";

									echo '<option value="'.$topic['id'].'" '.$selected.'>'.$topic['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">Module</label>
						<div class="form-group">
							<select name="moduleID" class="form-control">
								<option value="">select module</option>
								<?php 
								foreach($all_modules as $module)
								{
									$selected = ($module['id'] == $this->input->post('moduleID')) ? ' selected="selected"' : "";

									echo '<option value="'.$module['id'].'" '.$selected.'>'.$module['moduleName'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">Student</label>
						<div class="form-group">
							<select name="studentID" class="form-control">
								<option value="">select student</option>
								<?php 
								foreach($all_students as $student)
								{
									$selected = ($student['studentID'] == $this->input->post('studentID')) ? ' selected="selected"' : "";

									echo '<option value="'.$student['studentID'].'" '.$selected.'>'.$student['studentID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="instruction" class="control-label"><span class="text-danger">*</span>Instruction</label>
						<div class="form-group">
							<input type="text" name="instruction" value="<?php echo $this->input->post('instruction'); ?>" class="form-control" id="instruction" />
							<span class="text-danger"><?php echo form_error('instruction');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dueDate" class="control-label"><span class="text-danger">*</span>DueDate</label>
						<div class="form-group">
							<input type="text" name="dueDate" value="<?php echo $this->input->post('dueDate'); ?>" class="form-control" id="dueDate" />
							<span class="text-danger"><?php echo form_error('dueDate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="facilitatorID" class="control-label"><span class="text-danger">*</span>FacilitatorID</label>
						<div class="form-group">
							<input type="text" name="facilitatorID" value="<?php echo $this->input->post('facilitatorID'); ?>" class="form-control" id="facilitatorID" />
							<span class="text-danger"><?php echo form_error('facilitatorID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="facilitatorID2" class="control-label">FacilitatorID2</label>
						<div class="form-group">
							<input type="text" name="facilitatorID2" value="<?php echo $this->input->post('facilitatorID2'); ?>" class="form-control" id="facilitatorID2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="academicID" class="control-label">AcademicID</label>
						<div class="form-group">
							<input type="text" name="academicID" value="<?php echo $this->input->post('academicID'); ?>" class="form-control" id="academicID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marks" class="control-label"><span class="text-danger">*</span>Marks</label>
						<div class="form-group">
							<input type="text" name="marks" value="<?php echo $this->input->post('marks'); ?>" class="form-control" id="marks" />
							<span class="text-danger"><?php echo form_error('marks');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="discussion" class="control-label"><span class="text-danger">*</span>Discussion</label>
						<div class="form-group">
							<textarea name="discussion" class="form-control" id="discussion"><?php echo $this->input->post('discussion'); ?></textarea>
							<span class="text-danger"><?php echo form_error('discussion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="discussion2" class="control-label"><span class="text-danger">*</span>Discussion2</label>
						<div class="form-group">
							<textarea name="discussion2" class="form-control" id="discussion2"><?php echo $this->input->post('discussion2'); ?></textarea>
							<span class="text-danger"><?php echo form_error('discussion2');?></span>
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