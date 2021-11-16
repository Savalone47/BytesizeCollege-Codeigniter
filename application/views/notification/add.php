<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3 class="box-title">Notification Add</h3>
            </div>
        </div>
            <?php echo form_open('notification/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo $this->input->post('title'); ?>" class="form-control" id="title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="author" class="control-label">Author</label>
						<div class="form-group">
							<input type="text" name="author" value="<?php echo $this->input->post('author'); ?>" class="form-control" id="author" />
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="created_at" class="control-label">Date</label>
                        <div class="form-group">
                            <input type="date" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" class="form-control" id="created_at" />
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="notification" class="control-label">Notification</label>
						<div class="form-group">
							<textarea name="notification" class="form-control" id="notification"><?php echo $this->input->post('notification'); ?></textarea>
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