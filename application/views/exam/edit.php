<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3 class="box-title">Exam Edit</h3>
            </div>
			<?php echo form_open('exam/edit/'.$exam['id']); ?>
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
									$selected = ($value == $exam['moduleID']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label"><span class="text-danger">*</span>Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $exam['date']); ?>" class="has-datepicker form-control" id="date" />
							<span class="text-danger"><?php echo form_error('date');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="start" class="control-label"><span class="text-danger">*</span>Start</label>
						<div class="form-group">
							<input type="text" name="start" value="<?php echo ($this->input->post('start') ? $this->input->post('start') : $exam['start']); ?>" class="form-control" id="start" />
							<span class="text-danger"><?php echo form_error('start');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="end" class="control-label"><span class="text-danger">*</span>End</label>
						<div class="form-group">
							<input type="text" name="end" value="<?php echo ($this->input->post('end') ? $this->input->post('end') : $exam['end']); ?>" class="form-control" id="end" />
							<span class="text-danger"><?php echo form_error('end');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $exam['title']); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="exam" class="control-label"><span class="text-danger">*</span>Exam</label>
						<div class="form-group">
							<input type="text" name="exam" value="<?php echo ($this->input->post('exam') ? $this->input->post('exam') : $exam['exam']); ?>" class="form-control" id="exam" />
							<span class="text-danger"><?php echo form_error('exam');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="marks" class="control-label"><span class="text-danger">*</span>Marks</label>
						<div class="form-group">
							<input type="text" name="marks" value="<?php echo ($this->input->post('marks') ? $this->input->post('marks') : $exam['marks']); ?>" class="form-control" id="marks" />
							<span class="text-danger"><?php echo form_error('marks');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="term" class="control-label"><span class="text-danger">*</span>Term</label>
						<div class="form-group">
							<input type="text" name="term" value="<?php echo ($this->input->post('term') ? $this->input->post('term') : $exam['term']); ?>" class="form-control" id="term" />
							<span class="text-danger"><?php echo form_error('term');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="paper" class="control-label"><span class="text-danger">*</span>Paper</label>
						<div class="form-group">
							<input type="text" name="paper" value="<?php echo ($this->input->post('paper') ? $this->input->post('paper') : $exam['paper']); ?>" class="form-control" id="paper" />
							<span class="text-danger"><?php echo form_error('paper');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo ($this->input->post('deleteStatus') ? $this->input->post('deleteStatus') : $exam['deleteStatus']); ?>" class="form-control" id="deleteStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="date" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $exam['time_stamp']); ?>" class="form-control" id="time_stamp" />
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