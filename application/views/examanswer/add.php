
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Module</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="all_exam.php">Exam</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
                                <li><a class="parent-item" href="exam_detail.php">Answer Detail</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
								<li class="active">Add</li>
							</ol>
						</div>
					</div>
			
					<div class="row">
                        <div class="card">
                        <form action="<?php echo site_url("examanswer/add")?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="card-body row">
									<div class="col-md-6">
										<label for="moduleID" class="control-label">ModuleID</label>
										<div class="form-group">
											<select name="moduleID" class="form-control">
												<?php 
												foreach($modules as $value){?>
													<option value="<?php echo $value["moduleID"]?>"><?php echo $value["moduleName"]?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<label for="answer" class="control-label"><span class="text-danger">*</span>Answer</label>
										<div class="form-group">
											<input type="file" name="answer" value="<?php echo $this->input->post('answer'); ?>" class="form-control" id="answer" />
											<span class="text-danger"><?php echo form_error('answer');?></span>
										</div>
									</div>
					
									<div class="col-md-6">
										<label for="examName" class="control-label"><span class="text-danger">*</span>ExamName</label>
										<div class="form-group">
											<textarea name="examName" class="form-control" id="examName"><?php echo $this->input->post('examName'); ?></textarea>
											<span class="text-danger"><?php echo form_error('examName');?></span>
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