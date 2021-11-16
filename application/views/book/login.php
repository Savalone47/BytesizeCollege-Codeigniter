
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Smart University | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="<?php echo site_url("fonts/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo site_url("resources/assets_admin/plugins/iconic/css/material-design-iconic-font.min.css")?>">
    <!-- bootstrap -->
    <link href="<?php echo site_url("resources/assets_admin/plugins/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?php echo site_url("resources/assets_admin/css/pages/extra_pages.css")?>">
    <!-- favicon -->
    <link rel="shortcut icon" href="https://radixtouch.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?php echo site_url('book/auth_student')?>" method="post">
					<span class="login100-form-logo">
						<img alt="" src="<?php echo site_url("resources/assets_admin/img/logo-2.png")?>">
					</span>
                <?php if($this->session->flashdata("messagePr")){?>
                    <div class="alert alert-info">
                        <?php echo $this->session->flashdata("messagePr")?>
                    </div>
                <?php } ?>
                <span class="login100-form-title p-b-34 p-t-27">
					CONNECTION
					</span>
                <div class="row">
                    <div class="col-lg-12 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                            <input class="input100" type="email" name="studentEmail" placeholder="Your Email">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>
                    <div class="col-lg-12 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="studentPassword" placeholder="Your Password">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>
                </div>
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">

                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Connexion
                    </button>
                </div>
                <div class="text-center p-t-30">
                    <a class="txt1" href="#">
                        You already have a membership?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- start js include path -->
<script src="<?php echo site_url("resources/assets_admin/plugins/jquery/jquery.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/plugins/bootstrap/js/bootstrap.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/js/pages/extra-pages/pages.js")?>"></script>

</body>
</html>