<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Examanswer Edit</h3>
            </div>
			<?php echo form_open('examanswer/edit/'.$examanswer['answerID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<select name="moduleID" class="form-control">
								<option value="">select</option>
								<?php 
								$moduleID_values = array(
								);

								foreach($moduleID_values as $value => $display_text)
								{
									$selected = ($value == $examanswer['moduleID']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="answer" class="control-label"><span class="text-danger">*</span>Answer</label>
						<div class="form-group">
							<input type="text" name="answer" value="<?php echo ($this->input->post('answer') ? $this->input->post('answer') : $examanswer['answer']); ?>" class="form-control" id="answer" />
							<span class="text-danger"><?php echo form_error('answer');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="activeStatus" class="control-label"><span class="text-danger">*</span>ActiveStatus</label>
						<div class="form-group">
							<input type="text" name="activeStatus" value="<?php echo ($this->input->post('activeStatus') ? $this->input->post('activeStatus') : $examanswer['activeStatus']); ?>" class="form-control" id="activeStatus" />
							<span class="text-danger"><?php echo form_error('activeStatus');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $examanswer['time_stamp']); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="examName" class="control-label"><span class="text-danger">*</span>ExamName</label>
						<div class="form-group">
							<textarea name="examName" class="form-control" id="examName"><?php echo ($this->input->post('examName') ? $this->input->post('examName') : $examanswer['examName']); ?></textarea>
							<span class="text-danger"><?php echo form_error('examName');?></span>
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