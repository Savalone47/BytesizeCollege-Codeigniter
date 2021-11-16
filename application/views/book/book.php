
        
        <section class="course-category-three">
            <img src="assets/images/circle-stripe.png" class="course-category-three__circle" alt="">
            <div class="container">
                <div class="block-title">
                    <h2 class="block-title__title">Online Books <br>
                        All Books</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                <?php if($books):?>
                <?php foreach($books as $b){ ?>
                    <a href="<?php echo site_url($b['file_book'])?>">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <img src="<?php echo site_url('resources/assets/images/course-category-1-3.png')?>" alt="">
                           
                                <div class="course-category-three__content">
                                    <h3 class="course-category-three__title"><a href="#"><?php echo $b['title_book']?></a></h3>
                                    <!-- /.course-category-three__title -->
                                    <p class="course-category-three__text">Over 752 Courses</p>
                                    <!-- /.course-category-three__text -->
                                </div><!-- /.course-category-three__content -->
                          
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    </a>
                <?php } ?>
                <?php else:?>
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align: center;">
                        <img src="<?php echo site_url('resources/assets/images/empty.png')?>" alt="" width="100%">
                        <h3 style="text-align: center;">Oops Byte size College students only</h3>
                    </div>
                   
                <?php endif?>
                </div><!-- /.row -->
               
            </div><!-- /.container -->
        </section><!-- /.course-category-three -->
        
