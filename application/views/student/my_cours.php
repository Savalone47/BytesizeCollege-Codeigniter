<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">My Courses</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo site_url('student/my_courses');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">My Courses</li>
							</ol>
						</div>
					</div>
					<div class="row">	
					</div>
					<!-- start widget -->
					<div class="row">
						<?php if($this->session->activate_status == 1):?>
							<?php foreach($courses as $c){ ?>
								
							<div class="col-lg-3 col-md-6 col-12 col-sm-6">
								<div class="blogThumb dropdown dropdown-extended dropdown-notification">
									<div class="thumb-center"><img class="img-responsive" alt="user"src="<?php echo site_url("resources/assets_admin/img/course/course1.jpg")?>"></div>
										<div class="course-box">
											<h4><?php echo $c["courseName"]?></h4>
											<div class="text-muted"><span class="m-r-10"><?php echo $c["time_stamp"]?></span>

											</div>
													<p><span><i class="ti-alarm-clock"></i><?php echo $c["courseType"]?></span></p>
													
													<a href="<?php echo site_url("module/get_module_of_course_student/".$c["coursesID"])?>">
														<button
															class="btn btn-info mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">
															Module and examen
														</button>
													</a>
												</div>
											</div>
										</div>
							<?php } ?>
						<?php else:?>
							<h2>Contact Your administrator for your activation! But complete your Profile<a href="#">profile</a></h2>
						<?php endif ?>
                        <!---subject end-->

                    </div>
					<!-- end new student list -->
				</div>
			</div>