<section class="inner-banner">
</section><!-- /.inner-banner -->
<section class="course-one course-page">
    <div class="container">
        <div class="row">
            <?php foreach($Events as $e){ ?>
                <div class="col-md-4">
                    <div class="course-one__single">
                        <div class="course-one__image">
                            <img src="<?php echo site_url('resources/assets/images/event.png')?>" alt="">
                            <i class="far fa-heart"></i><!-- /.far fa-heart -->
                        </div><!-- /.course-one__image -->
                        <div class="course-one__content">
                            <a href="#" class="course-one__category">Event</a><!-- /.course-one__category -->
                            <div class="course-one__admin">
                            </div><!-- /.course-one__admin -->
                            <h3 class="course-one__title"><?php echo $e['eventTitle'];?></h3>
                            <div class=""><?php echo $e['eventDescription']?></div>
                            <div class=""><?php echo $e['eventLocation']?></div>
                            <div class=""><?php echo $e['eventDate']?></div>
                        </div><!-- /.course-one__content -->
                    </div><!-- /.course-one__single -->
                </div>
            <?php }?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.course-one course-page -->

