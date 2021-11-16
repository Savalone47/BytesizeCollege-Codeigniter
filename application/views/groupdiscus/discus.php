<!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Chat</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="all_class_course.php">All Class</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="course_details.php">Class Details</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="subject_option.php">Subjects Options</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Community</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-head">
                            <header>PROFESSOR</header>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <ul class="chat nice-chat small-slimscroll-style">
                                    <?php foreach ($discussions as $discussion) :?>
                                    <?php if(!empty($discussion['discussion'])) :?>
                                        <li class="in"><img src="../assets/img/prof/prof1.jpg" class="avatar"
                                                            alt="">
                                            <div class="message">
                                                <span class="arrow"></span> <a class="name" href="#"><?php
                                                    foreach ($profs as $prof){
                                                       if($prof['managementID'] == $discussion['facilitatorID']){
                                                           echo $prof['managementName'];
                                                       }
                                                    }
                                                    ?></a>
                                                <span class="datetime"><?= $discussion['time_stamp']?></span> <span
                                                        class="body"> <?= $discussion['discussion']?> </span>
                                            </div>
                                        </li>
                                    <?php endif;?>
                                    <?php endforeach;?>
                                </ul>
                                <div class="box-footer chat-box-submit">
                                    <form action="<?=site_url('Groupdiscus/sendMessageProf')?>" method="post">
                                        <div class="input-group">
                                            <input hidden style="width: 50%" name="file" type="file" class="default" multiple>
                                            <input type="text" name="discussion" placeholder="Enter your ToDo List"
                                                   class="form-control">
                                            <input hidden type="text" name="studentID" class="form-control" value="<?= $this->session->id_user?>">
                                            <input hidden type="text" name="moduleID" class="form-control"value="<?=$module?>">
                                            <input hidden type="text" name="topicID" class="form-control" value="<?=$topic?>">
                                            <span class="input-group-btn">
														<button type="submit" class="btn btn-warning btn-flat"><i
                                                                    class="fa fa-arrow-right"></i></button>
													</span> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-head">
                                <header>STUDENT</header>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <ul class="chat nice-chat small-slimscroll-style">
                                    <?php foreach ($discussions as $discussion) :?>
                                    <?php if(!empty($discussion['discussion2'])) :?>
                                        <?php if($discussion['studentID'] == $this->session->id_user) :?>
                                            <li class="in"><img src="../assets/img/prof/prof1.jpg" class="avatar"
                                                                alt="">
                                                <div class="message">
                                                    <span class="arrow"></span> <a class="name" href="#"><?=$this->session->name_user?>
                                                    </a> <span class="datetime"><?= $discussion['time_stamp']?><</span> <span
                                                            class="body"> <?= $discussion['discussion2']?> </span>
                                                </div>
                                            </li>
                                        <?php else :?>
                                            <li class="out"><img src="../assets/img/prof/prof1.jpg" class="avatar"
                                                                 alt="">
                                                <div class="message">
                                                    <span class="arrow"></span> <a class="name" href="#">
                                                        <?php foreach ($students as $student) {
                                                            if($student['studentID'] == $discussion['studentID']){
                                                                echo $student['studentName'];
                                                            }
                                                        }
                                                        ?>

                                                    </a> <span class="datetime"><?= $discussion['time_stamp']?><</span> <span
                                                            class="body"> <?= $discussion['discussion2']?> </span>
                                                </div>
                                            </li>
                                        <?php endif;?>
                                    <?php endif;?>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="box-footer chat-box-submit">
                                    <form action="<?=site_url('Groupdiscus/sendMessage')?>" method="post">
                                        <div class="input-group">
                                            <input hidden style="width: 50%" name="file" type="file" class="default" multiple>
                                            <input type="text" name="discussion2" placeholder="Enter your ToDo List"
                                                   class="form-control">
                                            <input hidden type="text" name="studentID" class="form-control" value="<?= $this->session->id_user?>">
                                            <input hidden type="text" name="moduleID" class="form-control"value="<?=$module?>">
                                            <input hidden type="text" name="topicID" class="form-control" value="<?=$topic?>">
                                            <span class="input-group-btn">
														<button type="submit" class="btn btn-warning btn-flat"><i
                                                                    class="fa fa-arrow-right"></i></button>
													</span> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>