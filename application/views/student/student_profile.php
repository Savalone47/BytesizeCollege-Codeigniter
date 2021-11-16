<!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Student Profile</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="<?=base_url('couse/report')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="all_students.php">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Student Profile</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div>
                        <?php foreach($students as $std) { ?>
                        <div class="card">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="profile-userpic">
                                        <img src="<?=base_url()?>resources/assets_admin/img/std/std3.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name"><?php echo $std['studentName'];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>First Name</b> : <?php echo $std['studentName'];?>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Last Name</b> : <?php echo $std["studentLastName"];?>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Email</b> : <?php echo $std["studentEmail"];?>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Phone Number</b> : <?php echo $std["studentPhone"];?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Date of BirthDay</b> : <?php echo $std['studentDOB'];?>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Nationality</b> : <?php echo $std['studentCountry'];?>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Gender</b> : <?php echo $std['gender'];?>
                                            </li>
                                            <li class="list-group-item">
                                                <button type="submit" class="btn btn-success"><a href="#">Activate</a></button>
                                                <button type="submit" class="btn btn-danger"><a href="<?php echo base_url('student/remove/'.$std['studentID'])?>">Delete</a></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END SIDEBAR USER TITLE -->
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->

                </div>
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Password Change</header>
                        </div>
                        <div class="card-body " id="bar-parent">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="simpleFormEmail">Password</label>
                                    <input type="password" class="form-control" id="simpleFormEmail"
                                           placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="simpleFormPassword"
                                           placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->