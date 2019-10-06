<?php 
    $css = $this->config->item("cssBackend");
    $js = $this->config->item("jsBackend");
    $image = $this->config->item("imageBackend");
    $plugin = $this->config->item("pluginBackend");
    $cdnAdmin = $this->config->item("cdnAdminBackend");
    $cdnBanner = $this->config->item("cdnBannerBackend");
    $cdnProduct = $this->config->item("cdnProductBackend");
    $cdnService = $this->config->item("cdnServiceBackend");
    $cdnTestimonial = $this->config->item("cdnTestimonialBackend");
    $cdnGallery = $this->config->item("cdnGalleryBackend");
    $cdnLogo = $this->config->item("cdnLogoBackend");
    $cdnAbout = $this->config->item("cdnAboutBackend");
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
    <link rel="stylesheet" href="<?=$plugin?>dropify/dropify.css">
    <link rel="stylesheet" href="<?=$plugin?>animate/animate.css">
    <link rel="stylesheet" href="<?=$plugin?>fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?=$css?>theme.css">
    <!-- End Source CSS We Use -->

    <link rel="canonical" href="<?=site_url('/')?>">
</head>
<body>
    <div class="container-admin">
        <!-- NAVBAR -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a href="<?=site_url('admin/dashboard')?>" class="navbar-brand brand-logo">
                    <img src="<?=$image?>logo.svg" alt="">
                </a>
                <a href="<?=site_url('admin/dashboard')?>" class="navbar-brand brand-logo-mini">
                    <img src="<?=$image?>logo-square.svg" alt="">
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button id="sidebar-toggler" class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <!-- <li class="nav-item search-wrapper d-none d-md-block">
                        <form action="" method="get">
                            <div class="form-group mb-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="Search">
                                </div>
                            </div>
                        </form>
                    </li> -->
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        <a class="nav-link dropdown-toggle no-carret" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="dropdown-toggle-wrapper">
                                <div class="inner">
                                    <img class="img-xs rounded-circle" src="<?=$cdnAdmin.$this->session->userdata("image")?>" alt="Profile image" style="object-fit: cover; object-position: top;">
                                </div>
                                <div class="inner">
                                    <div class="inner">
                                        <span class="profile-text font-weight-bold">
                                            <?=$this->session->userdata("name");?>
                                        </span>
                                        <small class="profile-text small">
                                            <?=($this->session->userdata("role")==1)?"Administrator":"Content Manager"?>
                                        </small>
                                    </div>
                                    <div class="inner">
                                        <div class="icon-wrapper">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-0" aria-labelledby="UserDropdown" style="top: calc(75px - 6px);">
                            <a href="<?=site_url('admin/self/'.$this->session->userdata("userId"))?>" class="dropdown-item mt-2">
                                Manage Accounts
                            </a>
                            <a href="<?=site_url('admin/self/password/'.$this->session->userdata("userId"))?>" class="dropdown-item">
                                Change Password
                            </a>
                            <a href="<?=site_url('admin/logout')?>" class="dropdown-item">
                                Sign Out
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR -->
    
        <!-- MAIN -->
        <div class="container-fluid page-body-wrapper">
            <!-- SIDEBAR -->
            <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <img src="<?=$cdnAdmin.$this->session->userdata("image")?>" alt="profile image" style="width: 125px; height: 125px; max-width: 125px; object-fit: cover; object-position: top;">
                        <p class="text-center font-weight-medium">
                            <?=$this->session->userdata("name");?>
                        </p>
                    </li>
                    <li class="nav-item <?=($page=='dashboard')?'active':''?>">
                        <a class="nav-link" href="<?=site_url('admin/dashboard')?>">
                            <i class="fas fa-chart-line"></i>
                            <span class="menu-title">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <?php if($this->session->userdata("role") == "1") { ?>
                        <li class="nav-item <?=($page=='admin')?'active':''?>">
                            <a class="nav-link" href="<?=site_url('admin/user')?>">
                                <i class="fas fa-users"></i>
                                <span class="menu-title">
                                    Admin
                                </span>
                            </a>
                        </li>
                    <?php ;} ?>
                    <li class="nav-item <?=($page=='banner')?'active':''?>">
                        <a class="nav-link" href="<?=site_url('admin/banner')?>">
                            <i class="fas fa-image"></i>
                            <span class="menu-title">
                                Banner
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?=($page=='about')?'active':''?>">
                        <a class="nav-link" href="<?=site_url('admin/about/form/0')?>">
                            <i class="fas fa-building"></i>
                            <span class="menu-title">
                                About Us
                            </span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link collapsed" data-toggle="collapse" href="#product-menu" aria-expanded="false" aria-controls="food-menu">
                            <i class="fab fa-dropbox"></i>
                            <span class="menu-title">
                                Product
                            </span>
                        </a>
                        <div class="collapse <?=($page=='category'||$page=='product')?'show':''?>" id="product-menu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item <?=($page=='category')?'active':''?>">
                                    <a class="nav-link" href="<?=site_url('admin/category')?>">
                                        <i class="fas fa-tags"></i>
                                        Category
                                    </a>
                                </li>
                                <li class="nav-item <?=($page=='product')?'active':''?>">
                                    <a class="nav-link" href="<?=site_url('admin/product')?>">
                                        <i class="fas fa-list"></i>
                                        Product
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item <?=($page=='service')?'active':''?>">
                        <a class="nav-link" href="<?=site_url('admin/service')?>">
                            <i class="fas fa-rocket"></i>
                            <span class="menu-title">
                                Service
                            </span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link collapsed" data-toggle="collapse" href="#food-menu" aria-expanded="false" aria-controls="food-menu">
                            <i class="fas fa-images"></i>
                            <span class="menu-title">
                                Gallery
                            </span>
                        </a>
                        <div class="collapse <?=($page=='image'||$page=='video')?'show':''?>" id="food-menu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item <?=($page=='image')?'active':''?>">
                                    <a class="nav-link" href="<?=site_url('admin/gallery/image')?>">
                                        <i class="fas fa-camera"></i>
                                        Image
                                    </a>
                                </li>
                                <li class="nav-item <?=($page=='video')?'active':''?>">
                                    <a class="nav-link" href="<?=site_url('admin/gallery/video')?>">
                                        <i class="fas fa-video"></i>
                                        Video
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item <?=($page=='testimonial')?'active':''?>">
                        <a class="nav-link" href="<?=site_url('admin/testimonial')?>">
                            <i class="fas fa-quote-left"></i>
                            <span class="menu-title">
                                Testimonial
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?=($page=='message')?'active':''?>">
                        <a class="nav-link" href="<?=site_url('admin/message')?>">
                            <i class="fas fa-envelope"></i>
                            <span class="menu-title">
                                Message
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?=($page=='information')?'active':''?>">
                        <a class="nav-link" href="<?=site_url('admin/information/form/0')?>">
                            <i class="fas fa-info-circle"></i>
                            <span class="menu-title">
                                Website Info
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- SIDEBAR -->