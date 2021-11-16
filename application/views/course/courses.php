<section class="blog-one blog-page">
            <div class="container">
                <div class="row">
                    <?php foreach($courses as $course):?>
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="<?php echo site_url($course->picture)?>" alt="">
                                <a class="blog-one__plus" href="<?php echo site_url('course/getCourseDetail/').$course->coursesID ?>"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On Jan 19" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="No Comments" href="#"><i class="fa fa-comments"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By Admin" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="#"><?php echo $course->courseName?></a>
                                </h2><!-- /.blog-one__title -->
                                <!-- /.blog-one__text -->
                                <a href="<?php echo site_url('course/getCourseDetail/').$course->coursesID ?>" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <?php endforeach?>
                </div><!-- /.row -->
                <div class="post-pagination">
                    <!-- /.fa fa-angle-double-left --></a>
                </div><!-- /.post-pagination -->
            </div><!-- /.container -->
        </section>