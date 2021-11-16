<div class="row">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Classroom Add</h3>
            </div>
            <?php echo form_open('classroom/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="roomID" class="control-label">RoomID</label>
						<div class="form-group">
							<input type="text" name="roomID" value="<?php echo $this->input->post('roomID'); ?>" class="form-control" id="roomID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="roomOTP" class="control-label">RoomOTP</label>
						<div class="form-group">
							<input type="text" name="roomOTP" value="<?php echo $this->input->post('roomOTP'); ?>" class="form-control" id="roomOTP" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="roomName" class="control-label">RoomName</label>
						<div class="form-group">
							<input type="text" name="roomName" value="<?php echo $this->input->post('roomName'); ?>" class="form-control" id="roomName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="roomPin" class="control-label">RoomPin</label>
						<div class="form-group">
							<input type="text" name="roomPin" value="<?php echo $this->input->post('roomPin'); ?>" class="form-control" id="roomPin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userID" class="control-label">UserID</label>
						<div class="form-group">
							<input type="text" name="userID" value="<?php echo $this->input->post('userID'); ?>" class="form-control" id="userID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentPin" class="control-label">StudentPin</label>
						<div class="form-group">
							<input type="text" name="studentPin" value="<?php echo $this->input->post('studentPin'); ?>" class="form-control" id="studentPin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="scheduledDate" class="control-label">ScheduledDate</label>
						<div class="form-group">
							<input type="text" name="scheduledDate" value="<?php echo $this->input->post('scheduledDate'); ?>" class="form-control" id="scheduledDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="startTime" class="control-label">StartTime</label>
						<div class="form-group">
							<input type="text" name="startTime" value="<?php echo $this->input->post('startTime'); ?>" class="form-control" id="startTime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="endTime" class="control-label">EndTime</label>
						<div class="form-group">
							<input type="text" name="endTime" value="<?php echo $this->input->post('endTime'); ?>" class="form-control" id="endTime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="date" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
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