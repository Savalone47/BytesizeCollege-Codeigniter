<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Modules</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?=base_url('course/index')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Modules</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="card-box dropdown dropdown-extended dropdown-notification">
							<div class="card-head">
                                <button class="dropdown-toggle btn btn-info">
                                        <a href="<?php echo site_url("module/add")?>">ADD NEW</a>
                                    </button>
							</div>
							<div class="card-body ">
								<!-- start course list -->
								<div class="row">
								<?php foreach($modules as $m){ ?>
									<div class="col-lg-3 col-md-6 col-12 col-sm-6">
										<div class="blogThumb dropdown dropdown-extended dropdown-notification">
											<div class="thumb-center"><img class="img-responsive" alt="user"
													src="<?php echo site_url("resources/assets_admin/img/course/course1.jpg")?>"></div>
											<div class="course-box">
												<h4><?php echo $m["moduleName"]?></h4>
												<div class="text-muted"><span class="m-r-10"><?=$m['moduleDate']?></span><br/>
													<a class="course-likes m-l-10" href="#"><i
															class="fa fa-heart-o"></i><?=$m['moduleCourseID']?></a>
												</div>
												<p><span><i class="ti-alarm-clock"></i> Duration: <?=$m['moduleDuration']?></span></p>
												<!--<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>-->
												<!--<p><span><i class="fa fa-graduation-cap"></i> Students: <?=$m['']?>+</span></p>-->

                                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary"
                                                   href="<?php echo site_url('module/edit/' .$m['moduleID'])?>">Edit</a>

                                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-danger"
                                                   href="<?php echo site_url('module/remove/' .$m['moduleID'])?>">Delete</a>
											</div>
										</div>
									</div>
								<?php }?>
								</div>
								<!-- End course list -->
							</div>
						</div>
					</div>
				</div>
			</div>