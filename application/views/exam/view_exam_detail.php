
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Exam of module</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a class="parent-item"
                               href="all_exam.php">Module</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Exams</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                    
                        <br>
                        <br>
                    </div>
                </div>
                <br>

                <div class="row">
                    <?php if($this->session->sucess):?>
                        <div class="col-md-12 alert alert-success">
                            file will send is arrived on destination
                        </div>
                    <?php elseif($this->session->error):?>
                        <div class="col-md-12 alert alert-danger">
                            <?php echo $this->session->error?>
                        </div>
                    <?php else:?>
                        <div><div>
                    <?php endif?>
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" 
							type="button" role="tab" aria-controls="nav-home" aria-selected="true">examen</button>
							<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" 
							type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Give your answer</button>
						</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <br><br>
                                        <div class="card card-topline-aqua">
                                            <div class="card-body no-padding dropdown dropdown-extended dropdown-notification">
                                                <div class="doctor-profile">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name txt" style="font-size: 15px"> Presentation Exam </div>
                                                        <div class="doctor-name" style="font-size: 12px;text-align: left;">
                                                            Exam Mark: 
                                                            <span style="float: right;"><?php echo $exam["marks"]?></span></div>
                                                        <div class="name-center" style="font-size: 10px;text-align: left;">Exam Date
                                                            <span style="float: right">
                                                            <?php echo $exam["date"]?>												</span>
                                                        </div>
                                                        <div class="name-center" style="font-size: 10px;text-align: left;">Exam Time
                                                            <span style="float: right"><?php echo $exam["start"]?></span>

                                                        </div>
                                                        <div class="name-center" style="font-size: 10px;text-align: left;">Exam Duration
                                                            <span style="float: right">
                                                            <?php
                                                                $secs = strtotime($exam["end"])-strtotime("00:00:00");
                                                                $result = date("H",strtotime($exam["start"])+$secs);
                                                                echo $result ?> h 												
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <br><br>
                                        <div class="card card-topline-aqua">
                                            <div class="card-body no-padding dropdown dropdown-extended dropdown-notification">
                                                <div class="doctor-profile">
                                                    <div class="profile-usertitle">
                                                    <img class="img-responsive" 
                                                        alt="exam file"src="<?php echo site_url("resources/assets_admin/img/course/course5.jpg")?>">
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="<?php echo site_url($exam["exam"])?>" class="btn btn-circle deepPink-bgcolor btn-sm">
                                                            Download exam file
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="card col-md-6">
                                            <form action="<?php echo site_url("examanswer/add")?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="card-body row">
                                                        <input type="hidden" name="moduleID" value="<?php echo $module ?>" class="form-control" id="answer" />
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
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
							</div>
							
						</div>
					</div>
            </div>
        </div>
    </div>
    <!-- end page content -->