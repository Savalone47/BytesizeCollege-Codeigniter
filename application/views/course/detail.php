            <?php foreach($courses as $course){?>
            <section class="inner-banner">
                        <div class="container">
                            <!-- /.list-unstyled -->
                            <h2 class="inner-banner__title"><?php echo $course['courseName']?></h2><br><!-- /.inner-banner__title -->
                        </div><!-- /.container -->
                    </section>
            <section class="course-details">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            <!-- /.course-details__author -->

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title"><?php echo $course['courseName']?></h2>
                                    <!-- /.course-details__title -->
                                    <div class="course-one__stars">
                                        <span class="course-one__stars-wrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span><!-- /.course-one__stars-wrap -->
                                        <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                       <!-- /.course-one__stars-count -->
                                    </div><!-- /.course-one__stars -->
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category"><?php echo $course['courseType']?></a><!-- /.course-one__category -->
                                </div>
                            </div>
                            <?php if($this->session->error):?>
                                <div class="col-md-12 alert alert-danger"><?php echo $this->session->error?></div>
                            <?php endif?>
                            <?php if($this->session->errorEmail):?>
                                <div class="col-md-12 alert alert-warning">Email not send but your enregistration is done</div>
                            <?php endif?>
                            <?php if($this->session->success):?>
                                <div class="col-md-12 alert alert-success">Operation of booking course is done! see your email box for more information</div>
                            <?php endif?>
                            <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                                <li>
                                    <a class="" role="tab" data-toggle="tab" href="#curriculum">Module</a>
                                </li>
                                
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                    <p class="course-details__tab-text"><?php echo $course['courseOverview']?></p><!-- /.course-details__tab-text -->
                                    <br>
                                </div><!-- /.course-details__tab-content -->
                                <div class="tab-pane  animated fadeInUp" role="tabpanel" id="curriculum">
                                    <h3 class="course-details__tab-title">Starting course</h3>
                                    <!-- /.course-details__title -->
                                    <br>
                                    <p><?php echo $course['curriculum']?></p>
                                    <br>
                                </div><!-- /.course-details__tab-content -->
                                <!-- /.course-details__tab-content -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="course-details__price">
                            <p class="course-details__price-text">Course price </p><!-- /.course-details__price-text -->
                            <p class="course-details__price-amount">$<?php echo $course['coursePrice']?></p><!-- /.course-details__price-amount -->
                            <a href="#" class="thm-btn course-details__price-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                Register for this Course
                            </a><!-- /.thm-btn -->
                        </div><!-- /.course-details__price -->
                        

                        <div class="modal fade row" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form method="POST" action="<?php echo site_url('student/register')?>" enctype="multipart/form-data">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               
                                    <div class="box-body">
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <label for="studentName" class="control-label"><span class="text-danger">*</span>StudentName</label>
                                                <div class="form-group">
                                                    <input type="text" name="studentName" value="<?php echo $this->input->post('studentName'); ?>" class="form-control" id="studentName" />
                                                    <span class="text-danger"><?php echo form_error('studentName');?></span>
                                                </div>
                                            </div>
                                            <input type="hidden" value="<?php echo $course['coursesID']?>" name="course">
                                            <div class="col-md-6">
                                                <label for="studentLastName" class="control-label"><span class="text-danger">*</span>StudentLastName</label>
                                                <div class="form-group">
                                                    <input type="text" name="studentLastName" value="<?php echo $this->input->post('studentLastName'); ?>" class="form-control" id="studentLastName" />
                                                    <span class="text-danger"><?php echo form_error('studentLastName');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="studentDOB" class="control-label"><span class="text-danger">*</span>Birth day</label>
                                                <div class="form-group">
                                                    <input type="date" name="studentDOB" class="form-control" id="studentDOB" />
                                                    <span class="text-danger"><?php echo form_error('studentDOB');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="studentCountry" class="control-label"><span class="text-danger">*</span>StudentCountry</label>
                                                <div class="form-group">
                                                    <input type="text" name="studentCountry" value="<?php echo $this->input->post('studentCountry'); ?>" class="form-control" id="studentCountry" />
                                                    <span class="text-danger"><?php echo form_error('studentCountry');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
                                                <div class="form-group">
                                                    <select name="gender" class="form-control" id="gender">
                                                        <option value="m">Male</option>
                                                        <option value="f">Femalale</option>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error('gender');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="studentEmail" class="control-label"><span class="text-danger">*</span>StudentEmail</label>
                                                <div class="form-group">
                                                    <input type="email" name="studentEmail" value="<?php echo $this->input->post('studentEmail'); ?>" class="form-control" id="studentEmail" />
                                                    <span class="text-danger"><?php echo form_error('studentEmail');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="studentPassword" class="control-label"><span class="text-danger">*</span>StudentPassword</label>
                                                <div class="form-group">
                                                    <input type="password" name="studentPassword" value="<?php echo $this->input->post('studentPassword'); ?>" class="form-control" id="studentPassword" />
                                                    <span class="text-danger"><?php echo form_error('studentPassword');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="studentPhone" class="control-label"><span class="text-danger">*</span>StudentPhone</label>
                                                <div class="form-group">
                                                    <input type="text" name="studentPhone" value="<?php echo $this->input->post('studentPhone'); ?>" class="form-control" id="studentPhone" />
                                                    <span class="text-danger"><?php echo form_error('studentPhone');?></span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <label for="studentAddress" class="control-label"><span class="text-danger">*</span>StudentAddress</label>
                                                <div class="form-group">
                                                    <input type="text" name="studentAddress" value="<?php echo $this->input->post('studentAddress'); ?>" class="form-control" id="studentAddress" />
                                                    <span class="text-danger"><?php echo form_error('studentAddress');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="passport" class="control-label"><span class="text-danger">*</span>Passport</label>
                                                <div class="form-group">
                                                    <input type="text" name="passport" value="<?php echo $this->input->post('passport'); ?>" class="form-control" id="passport" />
                                                    <span class="text-danger"><?php echo form_error('passport');?></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label for="proofOfPayment" class="control-label"><span class="text-danger">*</span>ProofOfPayment</label>
                                                <div class="form-group">
                                                    <input type="file" name="proofOfPayment" value="<?php echo $this->input->post('proofOfPayment'); ?>" class="form-control" id="proofOfPayment" />
                                                    <span class="text-danger"><?php echo form_error('proofOfPayment');?></span>
                                                </div>
                                            </div>
                                        
                                            <!--<div class="col-md-6">
                                                <label for="module" class="control-label"><span class="text-danger">*</span>module</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="module" >
                                                        <?php// foreach($modules as $module){?>
                                                            <option class="form-control" value="<?php// echo $module["moduleID"]?>"><?php// echo $module["moduleName"]?></option>
                                                        <?php// } ?>
                                                    </select>
                                                </div>
                                            </div>-->

                                            <div class="col-md-6">
                                                <label for="studentMiddleName" class="control-label"><span class="text-danger">*</span>StudentMiddleName</label>
                                                <div class="form-group">
                                                    <input type="text" name="studentMiddleName" value="<?php echo $this->input->post('studentMiddleName'); ?>" class="form-control" id="studentMiddleName" />
                                                    <span class="text-danger"><?php echo form_error('studentMiddleName');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="aggrement" class="control-label"><span class="text-danger">*</span>Aggrement</label>
                                                <div class="form-group">
                                                    <textarea name="aggrement" class="form-control" id="aggrement"><?php echo $this->input->post('aggrement'); ?></textarea>
                                                    <span class="text-danger"><?php echo form_error('aggrement');?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                            </div>
                            <div class="modal-footer">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check"></i> Register
                                    </button>
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>
                        </div>
                        <div class="course-details__meta">
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: <span><?php echo $course['courseDuration']?> months</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-flag"></i><!-- /.far fa-flag -->
                                </span><!-- /.course-details__icon -->
                                Skill Level: <span><?php echo $course['courseLevel']?></span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span>English</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                       <!-- /.course-details__list -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <?php } ?>