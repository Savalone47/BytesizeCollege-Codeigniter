    <div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<h1>Add Course</h1>	
						</div>
					</div>
					<div class="row">
                        <div class="card">
                            <form action="<?php echo site_url("course/add")?>" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">

                                    <div class="card-body row">
                                        <div class="col-lg-12" style="text-align: center; color: #888">
                                            <p>Create Course</p>
                                        </div>
                                        <?php if(isset($this->session->error)):?>
											<div class="alert alert-danger">
												<?php echo $this->session->error?>
											</div>
										<?php endif?>
										<div class="col-md-6">
											<label for="courseName" class="control-label"><span class="text-danger">*</span>CourseName</label>
											<div class="form-group">
												<input type="text" name="courseName" value="<?php echo $this->input->post('courseName'); ?>" class="form-control" id="courseName" />
												<span class="text-danger"><?php echo form_error('courseName');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseType" class="control-label"><span class="text-danger">*</span>CourseType</label>
											<div class="form-group">
												<select name="courseType" class="form-control">
													<option>Certified</option>
													<option>Short Course</option>
													<option>Career</option>
												</select>
												<span class="text-danger"><?php echo form_error('courseType');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseDepartment" class="control-label"><span class="text-danger">*</span>Department</label>
											<div class="form-group">
												<select name="courseDepartment" class="form-control">
													<?php foreach($departments as $dep){?>
													<option value="<?php echo $dep["departmentID"]?>"><?php echo $dep["departmentName"]?></option>
													<?php } ?>
												</select>
												<span class="text-danger"><?php echo form_error('courseDepartment');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="curriculum" class="control-label"><span class="text-danger">*</span>Curriculum</label>
											<div class="form-group">
												<input type="file" name="curriculum" class="form-control" id="curriculum" />
												<span class="text-danger"><?php echo form_error('curriculum');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseManager" class="control-label"><span class="text-danger">*</span>Manager</label>
											<div class="form-group">
												<select name="courseManager" class="form-control">
													<option>year</option>
													<option>month</option>
													<option>week</option>
													<option>days</option>
												</select>
												<span class="text-danger"><?php echo form_error('courseManager');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseCode" class="control-label"><span class="text-danger">*</span>Code</label>
											<div class="form-group">
												<input type="text" name="courseCode" value="<?php echo $this->input->post('courseCode'); ?>" class="form-control" id="courseCode" />
												<span class="text-danger"><?php echo form_error('courseCode');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseDuration" class="control-label"><span class="text-danger">*</span>Duration</label>
											<div class="form-group">
												<select name="courseDuration" class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
												</select>
												<span class="text-danger"><?php echo form_error('courseDuration');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseTimeline" class="control-label"><span class="text-danger">*</span>Timeline</label>
											<div class="form-group">
												<select name="courseTimeline" class="form-control">
													<option>year</option>
													<option>month</option>
													<option>week</option>
													<option>days</option>
												</select>
												<span class="text-danger"><?php echo form_error('courseTimeline');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseLevel" class="control-label"><span class="text-danger">*</span>CourseLevel</label>
											<div class="form-group">
												<input type="text" name="courseLevel" value="<?php echo $this->input->post('courseLevel'); ?>" class="form-control" id="courseLevel" />
												<span class="text-danger"><?php echo form_error('courseLevel');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseCredits" class="control-label"><span class="text-danger">*</span>CourseCredits</label>
											<div class="form-group">
												<input type="text" name="courseCredits" value="<?php echo $this->input->post('courseCredits'); ?>" class="form-control" id="courseCredits" />
												<span class="text-danger"><?php echo form_error('courseCredits');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="coursePrice" class="control-label"><span class="text-danger">*</span>CoursePrice</label>
											<div class="form-group">
												<input type="text" name="coursePrice" value="<?php echo $this->input->post('coursePrice'); ?>" class="form-control" id="coursePrice" />
												<span class="text-danger"><?php echo form_error('coursePrice');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseIntake" class="control-label"><span class="text-danger">*</span>CourseIntake</label>
											<div class="form-group">
												<input type="text" name="courseIntake" value="<?php echo $this->input->post('courseIntake'); ?>" class="form-control" id="courseIntake" />
												<span class="text-danger"><?php echo form_error('courseIntake');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseDelivery" class="control-label"><span class="text-danger">*</span>Delivery</label>
											<div class="form-group">
												<input type="text" name="courseDelivery" value="<?php echo $this->input->post('courseDelivery'); ?>" class="form-control" id="courseDelivery" />
												<span class="text-danger"><?php echo form_error('courseDelivery');?></span>
											</div>
										</div>
										<div class="col-md-6">
											<label for="courseStartDate" class="control-label"><span class="text-danger">*</span>CourseStartDate</label>
											<div class="form-group">
												<input type="date" name="courseStartDate" value="<?php echo $this->input->post('courseStartDate'); ?>" class="form-control" id="courseStartDate" />
												<span class="text-danger"><?php echo form_error('courseStartDate');?></span>
											</div>
										</div>
										
										<div class="col-md-6">
											<label for="courseOverview" class="control-label"><span class="text-danger">*</span>CourseOverview</label>
											<div class="form-group">
												<textarea name="courseOverview" class="form-control" id="courseOverview"><?php echo $this->input->post('courseOverview'); ?></textarea>
												<span class="text-danger"><?php echo form_error('courseOverview');?></span>
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
