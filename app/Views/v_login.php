<!DOCTYPE html>
<html lang="en">

<head>

    <title><?= $title; ?></title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url(); ?>/template/assets/images/favicon.svg" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/fonts/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/fonts/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/css/style.css" id="main-style-link">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <!-- <img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4"> -->
                        <a href="<?= base_url(); ?>">
                            <h4 class="mb-3 f-w-400">Login E-Arsip SIRENANG FISIP USK</h4>
                        </a>
                        <?php
                        $errors = session()->getFlashdata('errors');
                        if (!empty($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php foreach ($errors as $key => $value) { ?>
                                    <li><?= esc($value); ?></li>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        ?>

                        <!-- Form -->
                        <?= form_open('auth/login') ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i data-feather="mail"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="NIP USK" value="<?= old('email'); ?>" autofocus>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <!-- <div class="form-group text-left mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Save credentials
                                </label>
                            </div>
                        </div> -->
                        <button type="submit" class="btn btn-block btn-primary mb-4">Masuk</button>
                        <!-- <p class="mb-0 text-muted">Don???t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
                        <?= form_close() ?>
                        <!-- End Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?= base_url(); ?>/template/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url(); ?>/template/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/template/assets/js/plugins/feather.min.js"></script>
<script src="<?= base_url(); ?>/template/assets/js/pcoded.min.js"></script>
<!-- <script>
    $("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
</script> -->


</body>

</html>