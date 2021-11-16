<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3 class="box-title">Event Edit</h3>
            </div>
			<?php echo form_open('event/edit/'.$event['eventID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="eventType" class="control-label">EventType</label>
						<div class="form-group">
							<select name="eventType" class="form-control">
								<option value="">select</option>
								<?php 
								$eventType_values = array(
									'0'=>'teacher',
									'3'=>'general',
								);

								foreach($eventType_values as $value => $display_text)
								{
									$selected = ($value == $event['eventType']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eventTitle" class="control-label"><span class="text-danger">*</span>EventTitle</label>
						<div class="form-group">
							<input type="text" name="eventTitle" value="<?php echo ($this->input->post('eventTitle') ? $this->input->post('eventTitle') : $event['eventTitle']); ?>" class="form-control" id="eventTitle" />
							<span class="text-danger"><?php echo form_error('eventTitle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eventDate" class="control-label"><span class="text-danger">*</span>EventDate</label>
						<div class="form-group">
							<input type="date" name="eventDate" value="<?php echo ($this->input->post('eventDate') ? $this->input->post('eventDate') : $event['eventDate']); ?>" class="has-datepicker form-control" id="eventDate" />
							<span class="text-danger"><?php echo form_error('eventDate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eventstatTime" class="control-label"><span class="text-danger">*</span>EventstatTime</label>
						<div class="form-group">
							<input type="time" name="eventstatTime" value="<?php echo ($this->input->post('eventstatTime') ? $this->input->post('eventstatTime') : $event['eventstatTime']); ?>" class="form-control" id="eventstatTime" />
							<span class="text-danger"><?php echo form_error('eventstatTime');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eventendTime" class="control-label"><span class="text-danger">*</span>EventendTime</label>
						<div class="form-group">
							<input type="time" name="eventendTime" value="<?php echo ($this->input->post('eventendTime') ? $this->input->post('eventendTime') : $event['eventendTime']); ?>" class="form-control" id="eventendTime" />
							<span class="text-danger"><?php echo form_error('eventendTime');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eventLocation" class="control-label"><span class="text-danger">*</span>EventLocation</label>
						<div class="form-group">
							<input type="text" name="eventLocation" value="<?php echo ($this->input->post('eventLocation') ? $this->input->post('eventLocation') : $event['eventLocation']); ?>" class="form-control" id="eventLocation" />
							<span class="text-danger"><?php echo form_error('eventLocation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eventDescription" class="control-label"><span class="text-danger">*</span>EventDescription</label>
						<div class="form-group">
							<input type="text" name="eventDescription" value="<?php echo ($this->input->post('eventDescription') ? $this->input->post('eventDescription') : $event['eventDescription']); ?>" class="form-control" id="eventDescription" />
							<span class="text-danger"><?php echo form_error('eventDescription');?></span>
						</div>
					</div>
					<!--<div class="col-md-6">
						<label for="eventImage" class="control-label"><span class="text-danger">*</span>EventImage</label>
						<div class="form-group">
							<input type="text" name="eventImage" value="<?php echo ($this->input->post('eventImage') ? $this->input->post('eventImage') : $event['eventImage']); ?>" class="form-control" id="eventImage" />
							<span class="text-danger"><?php echo form_error('eventImage');?></span>
						</div>
					</div>-->
					<div class="col-md-6">
						<label for="eventStatus" class="control-label"><span class="text-danger">*</span>EventStatus</label>
						<div class="form-group">
							<input type="text" name="eventStatus" value="<?php echo ($this->input->post('eventStatus') ? $this->input->post('eventStatus') : $event['eventStatus']); ?>" class="form-control" id="eventStatus" />
							<span class="text-danger"><?php echo form_error('eventStatus');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eventTimestamp" class="control-label"><span class="text-danger">*</span>EventTimestamp</label>
						<div class="form-group">
							<input type="text" name="eventTimestamp" value="<?php echo ($this->input->post('eventTimestamp') ? $this->input->post('eventTimestamp') : $event['eventTimestamp']); ?>" class="form-control" id="eventTimestamp" />
							<span class="text-danger"><?php echo form_error('eventTimestamp');?></span>
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