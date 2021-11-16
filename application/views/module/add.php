



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
                                <li><a class="parent-item" href="exam_detail.php">Exam Detail</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
								<li class="active">Add</li>
							</ol>
						</div>
					</div>
					<div class="row">
                        <div class="card">
                            <form action="<?php echo site_url("module/add")?>" method="POST">
                                <div class="modal-body">

                                    <div class="card-body row">
                                        <div class="col-lg-12" style="text-align: center; color: #888">
                                            <p>Create Module</p>
                                        </div>
                                        <?php if(isset($this->session->error)):?>
											<div class="alert alert-danger">
												<?php echo $this->session->error?>
											</div>
										<?php endif?>
										<div class="col-md-6">
											<label for="modulePeriod" class="control-label">Period</label>
											<div class="form-group">
												<input type="text" name="modulePeriod" value="<?php echo $this->input->post('modulePeriod'); ?>" class="form-control" id="modulePeriod" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="modulePrerequisites" class="control-label">Prerequisites</label>
											<div class="form-group">
												<input type="text" name="modulePrerequisites" value="<?php echo $this->input->post('modulePrerequisites'); ?>" class="form-control" id="modulePrerequisites" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleEligible" class="control-label">Eligible</label>
											<div class="form-group">
												<input type="text" name="moduleEligible" value="<?php echo $this->input->post('moduleEligible'); ?>" class="form-control" id="moduleEligible" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="modulePrice" class="control-label">ModulePrice</label>
											<div class="form-group">
												<input type="text" name="modulePrice" value="<?php echo $this->input->post('modulePrice'); ?>" class="form-control" id="modulePrice" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleCode" class="control-label">ModuleCode</label>
											<div class="form-group">
												<input type="text" name="moduleCode" value="<?php echo $this->input->post('moduleCode'); ?>" class="form-control" id="moduleCode" />
											</div>
										</div>
										
										<div class="col-md-6">
											<label for="moduleDate" class="control-label">Date</label>
											<div class="form-group">
												<input type="date" name="moduleDate" value="<?php echo $this->input->post('moduleDate'); ?>" class="has-datetimepicker form-control" id="moduleDate" />
											</div>
										</div>
										
										<div class="col-md-6">
											<label for="moduleName" class="control-label">Name</label>
											<div class="form-group">
												<input type="text" name="moduleName" value="<?php echo $this->input->post('moduleName'); ?>" class="form-control" id="moduleName" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleType" class="control-label">Type</label>
											<div class="form-group">
												<input type="text" name="moduleType" value="<?php echo $this->input->post('moduleType'); ?>" class="form-control" id="moduleType" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleCourseID" class="control-label">Course</label>
											<div class="form-group">
												<select class="form-control" name="moduleCourseID">
													<?php foreach($courses as $course){?>
													<option value="<?php echo $course["coursesID"]?>"><?php echo $course["courseName"]?></optin>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleLevel" class="control-label">Level</label>
											<div class="form-group">
												<input type="text" name="moduleLevel" value="<?php echo $this->input->post('moduleLevel'); ?>" class="form-control" id="moduleLevel" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleCredit" class="control-label">Credit</label>
											<div class="form-group">
												<input type="text" name="moduleCredit" value="<?php echo $this->input->post('moduleCredit'); ?>" class="form-control" id="moduleCredit" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleDuration" class="control-label">Duration</label>
											<div class="form-group">
												<input type="text" name="moduleDuration" value="<?php echo $this->input->post('moduleDuration'); ?>" class="form-control" id="moduleDuration" />
											</div>
										</div>
										<div class="col-md-6">
											<label for="moduleOverview" class="control-label">Overview</label>
											<div class="form-group">
												<textarea name="moduleOverview" class="form-control" id="moduleOverview"><?php echo $this->input->post('moduleOverview'); ?></textarea>
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