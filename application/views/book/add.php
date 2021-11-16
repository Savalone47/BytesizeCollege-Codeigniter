<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3>Book Add</h3>
            </div>
           <form action="<?php echo site_url('book/add')?>" method="POST" enctype="multipart/form-data">
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="title_book" class="control-label"><span class="text-danger">*</span>title book</label>
						<div class="form-group">
							<input type="text" name="title_book" value="<?php echo $this->input->post('title_book'); ?>" class="form-control" id="title_book" />
							<span class="text-danger"><?php echo form_error('title_book');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="desription_book" class="control-label"><span class="text-danger">*</span>description</label>
						<div class="form-group">
							<textarea type="text" name="description_book" value="<?php echo $this->input->post('description_book'); ?>" class="form-control" id="description_book"></textarea>
							<span class="text-danger"><?php echo form_error('description_book');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="file_book" class="control-label">file book</label>
						<div class="form-group">
							<input type="file" name="file_book" class="form-control" id="file_book" />
						</div>
					</div>
					
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
			</form>
      	</div>
    </div>
</div>