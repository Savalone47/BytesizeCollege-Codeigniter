<section class="inner-banner">
</section><!-- /.inner-banner -->
<section class="course-one course-page">
    <div class="container">
        <div class="row">
            <?php foreach($Announces as $a){ ?>
                <div class="col-md-4">
                    <div class="course-one__single">
                        <div class="course-one__image">
                            <img width="300" height="300" src="<?php echo site_url('resources/assets/images/video-bg-1-1.jpg')?>" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->
                        <div class="course-one__content">
                            <a href="#" class="course-one__category">Announcement</a><!-- /.course-one__category -->
                            <div class="course-one__admin">
                            </div><!-- /.course-one__admin -->
                            <h3 class="course-one__title"><?php echo $a['title'];?></h3>
                            <div class=""><?php echo $a['author']?></div>
                            <div class=""><?php echo $a['notification']?></div>
                            <div class=""><?php echo $a['created_at']?></div>
                        </div><!-- /.course-one__content -->
                    </div><!-- /.course-one__single -->
                </div>
            <?php }?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.course-one course-page -->

