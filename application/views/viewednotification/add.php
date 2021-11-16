<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Viewednotification Add</h3>
            </div>
            <?php echo form_open('viewednotification/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label">UserID</label>
						<div class="form-group">
							<input type="text" name="userID" value="<?php echo $this->input->post('userID'); ?>" class="form-control" id="userID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userType" class="control-label">UserType</label>
						<div class="form-group">
							<input type="text" name="userType" value="<?php echo $this->input->post('userType'); ?>" class="form-control" id="userType" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="notificationID" class="control-label">NotificationID</label>
						<div class="form-group">
							<input type="text" name="notificationID" value="<?php echo $this->input->post('notificationID'); ?>" class="form-control" id="notificationID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateViewed" class="control-label">DateViewed</label>
						<div class="form-group">
							<input type="text" name="dateViewed" value="<?php echo $this->input->post('dateViewed'); ?>" class="has-datetimepicker form-control" id="dateViewed" />
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