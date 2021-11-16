
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
                                <?php foreach($module as $m){?>
								<div class="page-title"><?php echo  $m['moduleName']?></div>
                                <?php break ;} ?>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
                                
								<li><i class="fa fa-book"></i>&nbsp;<a class="parent-item"
										>Module</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="<?php 
								$id = null;

								foreach($module as $m){

									$id = $m['moduleID'];
								} 
								
								echo site_url("learning/add/".$id)?>" id="addRow" class="btn btn-info">
                                    Add New lesson <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a href="<?php 
								$id = null;

								foreach($module as $m){

									$id = $m['moduleID'];
								} 
								
								echo site_url("Learningmaterial/add/".$id)?>" id="addRow" class="btn btn-info">
                                    Add material <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a href="<?php echo site_url("Exam/addExam/").$m['moduleID']?>" id="addRow" class="btn btn-info">
                                    Create Exam <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <br><br>
                        </div>

                    </div>
                    
					<div class="row">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" 
								type="button" role="tab" aria-controls="nav-home" aria-selected="true">Lessons</button>
								<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" 
								type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Examens</button>
						
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="row">
								<?php foreach($lessons as $s){?>
									<div class="col-md-4">
										<div class="card card-box">
										<div class="card-body no-padding ">
											<div class="doctor-profile">
											<img src="<?php echo site_url("resources/assets_admin/img/std/std10.jpg")?>" class="doctor-pic"
												alt="">
											<div class="profile-usertitle">
												<div class="doctor-name"><?php echo $s["learningName"]?></div>
												<div class="name-center"> <a><?php echo $s["time_stamp"]?></a> </div>
											</div>
											<div>
											</div>
											<div class="profile-userbuttons">
												<a href="<?= site_url('learning/viewDetails/'.$s["learningID"])?>"
												class="btn btn-circle deepPink-bgcolor btn-sm">Read more</a>
											</div>
											</div>
										</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="row">
								<?php foreach($exams as $m){?>
									<div class="col-lg-3 col-md-6 col-12 col-sm-6">
										<div class="blogThumb dropdown dropdown-extended dropdown-notification">
											<div class="thumb-center"><img class="img-responsive" alt="user"
													src="<?php echo site_url("resources/assets_admin/img/course/course1.jpg")?>"></div>
											<div class="course-box">
												<h4><?php echo $m["title"]?></h4>
												<div class="text-muted"><span class="m-r-10"><?php echo $m["date"]?></span>
													<a class="course-likes m-l-10" href="#"><i
															class=""></i> mark: <?php echo $m["marks"]?></a>
												</div>
												<p><span><i class="ti-alarm-clock"></i> <?php echo $m["start"]?>-<?php echo $m["end"]?></span></p>
												<a href="<?php echo site_url("learning/get_learning_of_module/".$m["moduleID"])?>">
													<button
														class="btn btn-info mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">
														See Details
													</button>
												</a>
                                                <ul class="dropdown-menu">
                                                    <div class="row">
                                                        <div class="card-body row">
                                                            <div class="col-lg-10 p-t-20">
                                                                <form action="back/updateModule.php" method="POST" enctype="multipart/form-data">
                                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                                                        <input class="mdl-textfield__input" type="text" name="moduleName" value="TEACHING PRACTICE" id="txtFirstName">
                                                                        <label class="mdl-textfield__label">Subject Name</label>
                                                                    </div>
                                                                    <div class="col-lg-10 p-t-20">
                                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                                                            <select class="mdl-textfield__input" name="facilitator">
                                                                                <option value="1026">Paul Malatjie</option>
                                                                                <option value="1027">lecture</option>
                                                                            </select>
                                                                            <label for="list2" class="mdl-textfield__label">Teacher</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 p-t-20">
                                                                        <div class="mdl-textfield mdl-js-textfield txt-full-width is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                                                            <input type="hidden" name="id" value="388">
                                                                            <textarea class="mdl-textfield__input" name="overview" rows="4" id="education">												No											</textarea>
                                                                            <label class="mdl-textfield__label" for="text7">Subject Overview</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 p-t-20 text-center">
                                                                        <button
                                                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-info"
                                                                                style="text-transform: none;"
                                                                                data-upgraded=",MaterialButton,MaterialRipple">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <button type="button"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-danger">
                                                   <a href="<?php echo site_url('module/remove/'.$m['moduleID']); ?>">Delete</a>
                                                </button>
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>



			