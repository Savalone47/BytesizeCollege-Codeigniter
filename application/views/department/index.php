<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Department</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?=base_url('course/report')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Department</li>
							</ol>
						</div>
					</div>
                    <!-- start course list -->
                    <!-- End course list -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-xl-12">
							<div class="card-box">
								<div class="card-head">
									<header>Department List</header>
									<button id="sdntmenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
									</button>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="<?= base_url('department/add') ?>" id="addRow" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
									</div>
                                    <br>
                                    <div class="row">

                                    <?php foreach($department as $d){ ?>
                                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                            <div class="blogThumb">
                                                    <a href="<?php echo site_url("department/courses/".$d["departmentID"])?>">
                                                        <h3><?php echo $d["departmentName"]?></h3>
                                                        <div class="thumb-center">
                                                            <img class="img-responsive" alt="user" src="<?php echo site_url($d["logo"])?>"></div>
                                                        <div class="course-box">
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="<?php echo site_url('department/edit/' .$d["departmentID"]);?>"
                                                    class="btn btn-circle blue-bgcolor btn-sm">Edit</a>

                                            <a href="<?php echo site_url('department/remove/'.$d["departmentID"]);?>"
                                                class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash-o "></i>Delete</a>
                                    </div>
                                        <?php } ?>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>