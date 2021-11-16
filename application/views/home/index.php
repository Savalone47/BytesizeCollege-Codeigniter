<section class="inner-banner">
            
        </section><!-- /.inner-banner -->
        <section class="course-one course-page">
            <div class="container">
                <div class="row">
                    <?php foreach($campus as $camp){ ?>
                    <div class="col-md-4">
                        <div class="course-one__single">
                            <div class="course-one__image">
                                <img src="<?php echo base_url($camp['logo'])?>" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">By Bytesize</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a ><?php echo $camp['departmentName'];?></a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                </div><!-- /.course-one__stars -->
                            
                               
                                <a href="<?php echo site_url('course/getCourses/').$camp['departmentID'];?>" class="course-one__link">See Courses</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div> 
                    <?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-one course-page -->