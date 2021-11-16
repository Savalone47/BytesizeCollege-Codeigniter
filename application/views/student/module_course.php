

            <div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
                            <?php foreach($modules as $m){?>
								<div class="page-title"><?php echo  $m["courseName"]?></div>
								<?php break; } ?>>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Courses</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Module</li>
							</ol>
						</div>
					</div>
					<div class="row">	
					</div>
					<!-- start widget -->
					<div class="row">
                        <!---subject start-->
                        <?php if(!empty($modules)):?>
                        <?php foreach($modules as $m){ ?>

                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb dropdown dropdown-extended dropdown-notification">
								<div class="thumb-center"><img class="img-responsive" alt="user"src="<?php echo site_url("resources/assets_admin/img/course/course2.jpg")?>"></div>
									<div class="course-box">
										<h4><?php echo $m["moduleName"]?></h4>
										<div class="text-muted"><span class="m-r-10"><?php echo $m["moduleType"]?></span>
											
										</div>
												<a href="<?php echo site_url("exam/getExamenForStudent/".$m["moduleID"])?>">
													<button
														class="btn btn-info mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">
														view more
													</button>
												</a>
											</div>
										</div>
									</div>
                        <?php } ?>
                        <?php else:?>
                            <h1 style="text-align:center;margin-top:20%;"><b>Oupps no module for this course</b></h1>
                        <?php endif?>
                        <!---subject end-->

                    </div>
					<!-- end new student list -->
				</div>
			</div>