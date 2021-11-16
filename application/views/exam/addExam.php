

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Exam</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="all_exam.php">Exam</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="exam_detail.php">Exam Detail</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <form action="<?php echo site_url("exam/addExam/$moduleID")?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="card-body row">
                            <div class="col-lg-12" style="text-align: center; color: #888">
                                <p>Create Exams</p>
                            </div>
                            <?php if(isset($this->session->error)):?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->error?>
                                </div>
                            <?php endif?>
                            <div class="col-md-6">
                                <label for="moduleID" class="control-label"><span class="text-danger">*</span>ModuleId</label>
                                <div class="form-group">
                                    <input type="text" readonly="true" name="moduleID" value="<?php echo $moduleID; ?>" class="form-control" id="moduleID" />
                                    <span class="text-danger"><?php echo form_error('moduleID');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="date" class="control-label"><span class="text-danger">*</span>Date</label>
                                <div class="form-group">
                                    <input type="date" name="date" value="<?php echo $this->input->post('date'); ?>" class="form-control" id="date" />
                                    <span class="text-danger"><?php echo form_error('date');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="start" class="control-label"><span class="text-danger">*</span>Start</label>
                                <div class="form-group">
                                    <input type="time" name="start" value="<?php echo $this->input->post('start'); ?>" class="form-control" id="start" />
                                    <span class="text-danger"><?php echo form_error('start');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="end" class="control-label"><span class="text-danger">*</span>End</label>
                                <div class="form-group">
                                    <input type="time" name="end" value="<?php echo $this->input->post('end'); ?>" class="form-control" id="end" />
                                    <span class="text-danger"><?php echo form_error('end');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
                                <div class="form-group">
                                    <input type="text" name="title" value="<?php echo $this->input->post('title'); ?>" class="form-control" id="title" />
                                    <span class="text-danger"><?php echo form_error('title');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="marks" class="control-label"><span class="text-danger">*</span>Marks</label>
                                <div class="form-group">
                                    <input type="text" name="marks" value="<?php echo $this->input->post('marks'); ?>" class="form-control" id="marks" />
                                    <span class="text-danger"><?php echo form_error('marks');?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="term" class="control-label"><span class="text-danger">*</span>Term</label>
                                <div class="form-group">
                                    <input type="text" name="term" value="<?php echo $this->input->post('term'); ?>" class="form-control" id="term" />
                                    <span class="text-danger"><?php echo form_error('term');?></span>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <label for="exam" class="control-label"><span class="text-danger">*</span></label>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextfield">
                                    <br><input class="mdl-textfield__input" type="file" id="txtFirstName" name="exam">
                                    <label class="mdl-textfield__label">Upload Document for examen</label>
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