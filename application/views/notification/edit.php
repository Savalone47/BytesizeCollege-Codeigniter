<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3>Notification Edit</h3>
                <form action="<?php echo site_url('notification/edit/'.$notification['id']); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
                                <div class="form-group">
                                    <input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $notification['title']); ?>" class="form-control" id="title" />
                                    <span class="text-danger"><?php echo form_error('title');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="author" class="control-label"><span class="text-danger">*</span>Author</label>
                                <div class="form-group">
                                    <input type="text" name="author" value="<?php echo ($this->input->post('author') ? $this->input->post('author') : $notification['author']); ?>" class="form-control" id="author" />
                                    <span class="text-danger"><?php echo form_error('author');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="created_at" class="control-label"><span class="text-danger">*</span>Date</label>
                                <div class="form-group">
                                    <input type="date" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $notification['created_at']); ?>" class="form-control" id="created_at" />
                                    <span class="text-danger"><?php echo form_error('created_at');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="notification" class="control-label"><span class="text-danger">*</span>Notification</label>
                                <div class="form-group">
                                    <textarea name="notification" class="form-control" id="notification"><?php echo ($this->input->post('notification') ? $this->input->post('notification') : $notification['notification']); ?></textarea>
                                    <span class="text-danger"><?php echo form_error('notification');?></span>
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