<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Courses</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?=base_url('course/report')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Courses</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-6">
							<div class="btn-group">
								<a href="<?php echo site_url("course/add")?>" id="addRow" class="btn btn-info">
									Add New <i class="fa fa-plus"></i>
								</a>
							</div>
							<br><br><br><br><br>
						</div>
						
					</div>
					<!-- start widget -->
					<div class="row">
                        <!---subject start-->
                        <?php foreach($courses as $c){ ?>
                        <div class="col-xl-4 col-md-6">
                            <a style="color: inherit" href="<?php echo site_url("course/students/".$c["coursesID"])?>">
                                <div class="info-box bg-b-blue">
                                    <span class="info-box-icon "><i class="material-icons">group</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-number"><?php echo $c["courseName"]?><?php echo $c["courseType"];?></span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                        <span class="progress-description">
                                            <b>Intake : <?php echo $c['courseIntake'] ?></b> 2021 (<?php echo $c["courseDelivery"];?>) <br>
										</span>
                                    </div>
                                </div>
                            </a>
                            <div class="container">
                                <a href="<?php echo site_url('course/edit/'.$c["coursesID"]);?>">
                                    <button type="button"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary">Edit</button>
                                </a>
                                <a href="<?php echo site_url('course/remove/'.$c['coursesID']);?>">
                                    <button type="button"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-danger">Delete</button>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <!---subject end-->
                    </div>
					<!-- end new student list -->
				</div>
			</div>