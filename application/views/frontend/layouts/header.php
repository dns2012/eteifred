<?php 
    $css = $this->config->item("cssFrontend");
    $js = $this->config->item("jsFrontend");
    $image = $this->config->item("imageFrontend");
    $plugin = $this->config->item("pluginFrontend");
    $cdnAdmin = $this->config->item("cdnAdminBackend");
    $cdnBanner = $this->config->item("cdnBannerBackend");
    $cdnProduct = $this->config->item("cdnProductBackend");
    $cdnService = $this->config->item("cdnServiceBackend");
    $cdnTestimonial = $this->config->item("cdnTestimonialBackend");
    $cdnGallery = $this->config->item("cdnGalleryBackend");
    $cdnLogo = $this->config->item("cdnLogoBackend");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alnoor Garments</title>
    <meta name="description" content="Full line manufacturer and supplier of all types of garment specializing in Thobes , Abayas and Baju Koko.">

    <!-- Source CSS We Use -->
    <link rel="stylesheet" href="<?=$plugin?>bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?=$plugin?>owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=$plugin?>owl-carousel/owl.theme.default.css">
    <link rel="stylesheet" href="<?=$plugin?>select2/select2.css">
    <link rel="stylesheet" href="<?=$plugin?>fancybox/fancybox.css">
    <link rel="stylesheet" href="<?=$plugin?>animate/animate.css">
    <link rel="stylesheet" href="<?=$plugin?>themify-icon/themify-icons.css">
    <link rel="stylesheet" href="<?=$plugin?>fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?=$css?>theme.css">
    <!-- End Source CSS We Use -->

    <link rel='shortcut icon' type='image/png' href='<?=$image?>favicon.png' />
    <!-- <link rel='shortcut icon' type='image/x-icon' href='<?=$image?>favicon.ico' /> -->
    <link rel="canonical" href="<?=site_url('/')?>">
</head>
<body>
    <header class="header_area">
        <nav class="navbar navbar-expand-lg menu_one menu_four">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="<?=site_url('/')?>">
                    <img src="<?=$cdnLogo.$information->logo?>" srcset="<?=$cdnLogo.$information->logo?>" alt="logo">
                    <img src="<?=$cdnLogo.$information->logo?>" srcset="<?=$cdnLogo.$information->logo?>" alt="">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu w_menu">
                        <li class="nav-item <?=($page=='home')?'active':''?>">
                            <a class="nav-link" href="<?=site_url('/')?>">
                                Home
                            </a>
                        </li>
                        <li class="nav-item <?=($page=='about')?'active':''?>">
                            <a class="nav-link" href="<?=site_url('about')?>">
                                About
                            </a>
                        </li>
                        <li class="nav-item <?=($page=='product')?'active':''?>">
                            <a class="nav-link" href="<?=site_url('product')?>">
                                Products
                            </a>
                        </li>
                        <li class="nav-item <?=($page=='service')?'active':''?>">
                            <a class="nav-link" href="<?=site_url('service')?>">
                                Services
                            </a>
                        </li>
                        <li class="nav-item <?=($page=='gallery')?'active':''?>">
                            <a class="nav-link" href="<?=site_url('gallery')?>">
                                Gallery
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="btn btn_get btn_hover hidden-sm hidden-xs" href="<?=site_url('contact')?>">
                    Contact Us
                </a>
            </div>
        </nav>
    </header>