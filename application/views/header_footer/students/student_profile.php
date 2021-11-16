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
                    <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Student Profile</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div>
                    <?php foreach($student as $std) { ?>
                        <div class="card">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="profile-userpic">
                                        <img src="<?=base_url("resources/assets_admin/img/std/std3.jpg")?>" class="img-responsive" alt="">
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
                                            <li class="list-group-item">
                                                <b>Passport Doc</b> <a href="<?php echo site_url($std['passportDOC']) ?>">:  View File</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Address</b> : <?php echo $std["studentAddress"];?>
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
                                                <b>Certificate</b> : <a href="<?php echo base_url($std['certificates']);?>"></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Password</b> : <?php echo $std['studentPassword'];?>
                                            </li>

                                            <li class="list-group-item">
                                                <button type="submit" class="btn btn-info" >
                                                    <a href="<?php echo site_url('student/edit_profile_dashboard');?>">UPDATE INFO</a>
                                                </button>
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


            <div class="container">
                <div class="row">

                    <!--<div class="col-sm-4">
                        <form method="POST" action="<?php echo base_url('student/student_profile_dashboard'); ?>" enctype="multipart/form-data">
                            <?php if($this->session->success):?>
                                <div class="col-md-12 alert alert-info">
                                    <p>Yes! Your File is downloades with sucess!</p>
                                </div>
                            <?php endif ?>
                            <?php if($this->session->error):?>
                                <div class="col-md-12 alert alert-danger">
                                    <p><?php echo $this->session->error ?></p>
                                </div>
                            <?php endif ?>

                            <?php foreach ($student as $std): ?>
                            <div class="form-group">
                                <label for="filename" class="control-label"><span class="text-danger">*</span>Put Your BSC Registration Here:</label>
                                <div class="form-group">
                                    <input type="file" name="filename" value="" class="form-control" id="filename" />
                                    <span class="text-danger"><?php echo form_error('filename');?></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <?php endforeach; ?>
                        </form>
                    </div>-->
                    <div class="col-sm-8">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <h1>Download BSC Registration</h1>
                                <th>Filename</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="<?php echo site_url($docs); ?>">BSC Registration</a></td>
                                    <td><a href="<?php echo site_url($docs); ?>" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-download-alt"></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>