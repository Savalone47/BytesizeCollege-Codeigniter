<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h1>Department Add</h1>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <form action="<?php echo site_url('department/add')?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="card-body row">
                            <div class="col-lg-12" style="text-align: center; color: #888">
                                <p>Create Department</p>
                            </div>
                            <?php if(isset($this->session->error)):?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->error?>
                                </div>
                            <?php endif?>
                            <!--<div class="thumb-center">
                                <img class="img-responsive" alt="user" src="">
                            </div>-->

                            <div class="col-md-6">
                                <label for="courseName" class="control-label"><span class="text-danger">*</span>DepartmentName</label>
                                <div class="form-group">
                                    <input type="text" name="departmentName" value="<?php echo $this->input->post('departmentName'); ?>" class="form-control" id="departmentName" />
                                    <span class="text-danger"><?php echo form_error('departmentName');?></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="courseName" class="control-label"><span class="text-danger">*</span>HodID</label>
                                <div class="form-group">
                                    <input type="text" name="hodID" value="<?php echo $this->input->post('hodID'); ?>" class="form-control" id="hodID" />
                                    <span class="text-danger"><?php echo form_error('hodID');?></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="courseName" class="control-label"><span class="text-danger">*</span>Time Stamp</label>
                                <div class="form-group">
                                    <input type="date" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
                                    <span class="text-danger"><?php echo form_error('time_stamp');?></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" data-upgraded=",MaterialButton,MaterialRipple">Save<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
