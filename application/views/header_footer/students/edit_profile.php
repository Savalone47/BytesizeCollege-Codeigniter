<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3>Student profile Edit</h3>
            </div>
        </div>
            <form method="post" action="<?php echo site_url('student/edit_profile_dashboard')?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="row clearfix">
                    <?php if($this->session->success):?>
                        <div class="col-md-12 alert alert-info">
                            <p>Yes! your profil is updated with sucess!</p>
                        </div>
                    <?php endif ?>
                    <?php if($this->session->error):?>
                        <div class="col-md-12 alert alert-danger">
                            <p><?php echo $this->session->error ?></p>
                        </div>
                    <?php endif ?>
                    <?php foreach ($students as $student): ?>
                    <div class="col-md-6">
                        <label for="studentName" class="control-label"><span class="text-danger">*</span>StudentName</label>
                        <div class="form-group">
                            <input type="text" name="studentName" value="<?php echo ($this->input->post('studentName') ? $this->input->post('studentName') : $student['studentName']); ?>" class="form-control" id="studentName" />
                            <span class="text-danger"><?php echo form_error('studentName');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="studentLastName" class="control-label"><span class="text-danger">*</span>StudentLastName</label>
                        <div class="form-group">
                            <input type="text" name="studentLastName" value="<?php echo ($this->input->post('studentLastName') ? $this->input->post('studentLastName') : $student['studentLastName']); ?>" class="form-control" id="studentLastName" />
                            <span class="text-danger"><?php echo form_error('studentLastName');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="studentDOB" class="control-label"><span class="text-danger">*</span>StudentDOB</label>
                        <div class="form-group">
                            <input type="text" name="studentDOB" value="<?php echo ($this->input->post('studentDOB') ? $this->input->post('studentDOB') : $student['studentDOB']); ?>" class="has-datepicker form-control" id="studentDOB" />
                            <span class="text-danger"><?php echo form_error('studentDOB');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="studentCountry" class="control-label"><span class="text-danger">*</span>StudentCountry</label>
                        <div class="form-group">
                            <input type="text" name="studentCountry" value="<?php echo ($this->input->post('studentCountry') ? $this->input->post('studentCountry') : $student['studentCountry']); ?>" class="form-control" id="studentCountry" />
                            <span class="text-danger"><?php echo form_error('studentCountry');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
                        <div class="form-group">
                            <input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $student['gender']); ?>" class="form-control" id="gender" />
                            <span class="text-danger"><?php echo form_error('gender');?></span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label for="studentEmail" class="control-label"><span class="text-danger">*</span>StudentEmail</label>
                        <div class="form-group">
                            <input type="text" name="studentEmail" value="<?php echo ($this->input->post('studentEmail') ? $this->input->post('studentEmail') : $student['studentEmail']); ?>" class="form-control" id="studentEmail" />
                            <span class="text-danger"><?php echo form_error('studentEmail');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="studentPassword" class="control-label"><span class="text-danger">*</span>StudentPassword</label>
                        <div class="form-group">
                            <input type="text" name="studentPassword" value="<?php echo ($this->input->post('studentPassword') ? $this->input->post('studentPassword') : $student['studentPassword']); ?>" class="form-control" id="studentPassword" />
                            <span class="text-danger"><?php echo form_error('studentPassword');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="studentPhone" class="control-label"><span class="text-danger">*</span>StudentPhone</label>
                        <div class="form-group">
                            <input type="text" name="studentPhone" value="<?php echo ($this->input->post('studentPhone') ? $this->input->post('studentPhone') : $student['studentPhone']); ?>" class="form-control" id="studentPhone" />
                            <span class="text-danger"><?php echo form_error('studentPhone');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="studentAddress" class="control-label"><span class="text-danger">*</span>StudentAddress</label>
                        <div class="form-group">
                            <input type="text" name="studentAddress" value="<?php echo ($this->input->post('studentAddress') ? $this->input->post('studentAddress') : $student['studentAddress']); ?>" class="form-control" id="studentAddress" />
                            <span class="text-danger"><?php echo form_error('studentAddress');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="passportDOC" class="control-label"><span class="text-danger">*</span>PassportDOC</label>
                        <div class="form-group">
                            <input type="file" name="passportDOC" value="<?php echo ($this->input->post('passportDOC') ? $this->input->post('passportDOC') : $student['passportDOC']); ?>" class="form-control" id="passportDOC" />
                            <span class="text-danger"><?php echo form_error('passportDOC');?></span>
                        </div>
                    </div>

                    <?php endforeach ?>
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