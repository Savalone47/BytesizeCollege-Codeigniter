<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Lesson Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?=site_url('learning/get_learning_of_module/'.$learning['moduleID'])?>">All lessons</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Lesson Details</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="course-picture">
												<img src="<?= site_url("resources/assets_admin/img/std/std10.jpg")?>" class="img-responsive"
													alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> <?= $learning['learningName']?> </div>
										</div>

                                        <div class="profile-userbuttons">
                                            <a href="edit_course.php">
                                                <button type="button"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">
                                                    Edit
                                                </button>
                                            </a>
                                            <button type="button"
                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">Remove</button>
                                        </div>
										<!-- END SIDEBAR USER TITLE -->
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-head">
                                                            <header>TOPICS</header>
                                                            <a href="add_subjet.php">
                                                                <button class="btn btn-success btn-xs"
                                                                >
                                                                    <i class="fa fa-plus"></i> ADD TOPIC
                                                                </button>
                                                            </a>

                                                            <div class="tools">
                                                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                                <a class="t-collapse btn-color fa fa-chevron-down"
                                                                   href="javascript:;"></a>
                                                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body ">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped custom-table table-hover">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Name</th>
                                                                        <th>Teachers</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody class="dropdown dropdown-extended dropdown-notification">
                                                                            <tr>
                                                                                <td>

                                                                                    <a href="<?=$learning['link']?>">
                                                                                        <?= $topic['topicName'] ?>
                                                                                    </a>
                                                                                </td>
                                                                                <td>Lecture</td>
                                                                                <td>
                                                                                    <a href="add_student_to_course.php">
                                                                                        <button class="btn btn-success btn-xs">
                                                                                            <i class="fa fa-plus"></i> ADD STUDENT
                                                                                        </button>
                                                                                    </a>
                                                                                    <button class="btn btn-danger btn-xs">
                                                                                        <i class="fa fa-trash-o "></i> REMOVE
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="card-body ">
                                                            <div class="table-responsive">

                                                                    <tbody class="dropdown dropdown-extended dropdown-notification">
                                                                    <tr>
                                                                        <td>
                                                                            <a href="add_student_to_course.php">
                                                                                <button class="btn btn-success btn-xs">
                                                                                    <i class="fa fa-plus"></i> CREATE CHAT
                                                                                </button>

                                                                            </a>
                                                                            <a href="<?=site_url('Groupdiscus/openChat/'.$learning['learningTopic'])?>">
                                                                                <button class="btn btn-success btn-xs">
                                                                                    OPEN CHAT
                                                                                </button>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->

						</div>
					</div>

                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
				<!-- end page content -->