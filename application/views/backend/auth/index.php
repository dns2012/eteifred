<?php 
    $css = $this->config->item("cssBackend");
    $js = $this->config->item("jsBackend");
    $image = $this->config->item("imageBackend");
    $plugin = $this->config->item("pluginBackend");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Pro</title>
    <meta name="description" content="Admin Pro by Alfian Imanuddin">

    <!-- Source Font We Use -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,800" rel="stylesheet">
    <!-- End Source Font We Use -->

    <!-- Source CSS We Use -->
    <link rel="stylesheet" href="<?=$plugin?>bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?=$plugin?>owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=$plugin?>owl-carousel/owl.theme.default.css">
    <link rel="stylesheet" href="<?=$plugin?>select2/select2.css">
    <link rel="stylesheet" href="<?=$plugin?>fancybox/fancybox.css">
    <link rel="stylesheet" href="<?=$plugin?>animate/animate.css">
    <link rel="stylesheet" href="<?=$plugin?>fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?=$css?>theme.css">
    <!-- End Source CSS We Use -->

    <link rel="canonical" href="http://alfianimanuddin.com/index.html">
</head>
<body>
    <div class="container-admin">
        <!-- MAIN -->
        <div class="container-fluid page-body-wrapper">
            <div class="login-area">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center" style="height: 100vh;">
                        <div class="col-12 col-md-3 text-center">
                            <?php if(!empty($this->session->flashdata("warning"))) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?=$this->session->flashdata("warning")?>
                                </div>
                            <?php ;} ?>
                            <form action="<?=site_url('admin/login')?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id=""  placeholder="Email" required value="dnsprogress@gmail.com">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id=""  placeholder="Password" required value="acception">
                                </div>
                                <button class="btn btn-block btn-primary" type="submit">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN -->
    </div>

    <!-- Source JS We Use -->
    <script type="text/javascript" src="<?=$plugin?>bootstrap/jquery.js"></script>
    <script type="text/javascript" src="<?=$plugin?>bootstrap/popper.js"></script>
    <script type="text/javascript" src="<?=$plugin?>bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="<?=$plugin?>owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=$plugin?>select2/select2.js"></script>
    <script type="text/javascript" src="<?=$plugin?>fancybox/fancybox.js"></script>
    <script type="text/javascript" src="<?=$js?>theme.js"></script>
    <!-- End Source JS We Use -->
</body>
</html>