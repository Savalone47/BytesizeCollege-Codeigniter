<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Events Table Edit</h3>
            </div>
			<?php echo form_open('events_table/edit/'.$events_table['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $events_table['title']); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="className" class="control-label"><span class="text-danger">*</span>ClassName</label>
						<div class="form-group">
							<input type="text" name="className" value="<?php echo ($this->input->post('className') ? $this->input->post('className') : $events_table['className']); ?>" class="form-control" id="className" />
							<span class="text-danger"><?php echo form_error('className');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="start" class="control-label"><span class="text-danger">*</span>Start</label>
						<div class="form-group">
							<input type="text" name="start" value="<?php echo ($this->input->post('start') ? $this->input->post('start') : $events_table['start']); ?>" class="has-datetimepicker form-control" id="start" />
							<span class="text-danger"><?php echo form_error('start');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="end" class="control-label">End</label>
						<div class="form-group">
							<input type="text" name="end" value="<?php echo ($this->input->post('end') ? $this->input->post('end') : $events_table['end']); ?>" class="has-datetimepicker form-control" id="end" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="details" class="control-label"><span class="text-danger">*</span>Details</label>
						<div class="form-group">
							<input type="text" name="details" value="<?php echo ($this->input->post('details') ? $this->input->post('details') : $events_table['details']); ?>" class="form-control" id="details" />
							<span class="text-danger"><?php echo form_error('details');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $events_table['created_at']); ?>" class="form-control" id="created_at" />
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