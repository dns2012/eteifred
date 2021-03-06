<?php
$css = $this->config->item("cssBackend");
$js = $this->config->item("jsBackend");
$images = $this->config->item("imagesBackend");
$vendors = $this->config->item("vendorsBackend");

// $cdnAdmin = $this->config->item("cdnAdminBackend");
// $cdnBanner = $this->config->item("cdnBannerBackend");
// $cdnProduct = $this->config->item("cdnProductBackend");
// $cdnService = $this->config->item("cdnServiceBackend");
// $cdnTestimonial = $this->config->item("cdnTestimonialBackend");
// $cdnGallery = $this->config->item("cdnGalleryBackend");
// $cdnLogo = $this->config->item("cdnLogoBackend");
// $cdnAbout = $this->config->item("cdnAboutBackend");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <!-- vendorss:css -->
    <link rel="stylesheet" href="<?= $vendors ?>ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= $vendors ?>base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- vendors css for this page -->
    <!-- End vendors css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= $css ?>style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= $images ?>favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?= $images ?>logo-derfiete.jpeg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= $images ?>logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="ti-view-list"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="ti-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <!-- <li class="nav-item dropdown mr-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="ti-email mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="<?= $images ?>faces/face4.jpg" alt="images" class="profile-pic">
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">David Grey
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="<?= $images ?>faces/face2.jpg" alt="images" class="profile-pic">
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">Tim Cook
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="<?= $images ?>faces/face3.jpg" alt="images" class="profile-pic">
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal"> Johnson
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="ti-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li> -->
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <!-- <img src="<?= $images ?>faces/face28.jpg" alt="profile" /> -->
                            <strong><?= strtoupper($this->session->userdata('name')) ?></strong>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a href="<?= site_url('admin/logout') ?>" class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="ti-view-list"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item <?= ($page == 'dashboard') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= site_url('admin/dashboard') ?>">
                            <i class="ti-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item <?= (in_array($page, [''])) ? 'active' : '' ?>">
                        <a class="nav-link" data-toggle="collapse" href="#general" aria-expanded="false" aria-controls="auth">
                            <i class="ti-file menu-icon"></i>
                            <span class="menu-title">General Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse <?= (in_array($page, ['client', 'tyre-brand'])) ? 'show' : '' ?>" id="general">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link <?= ($page == 'client') ? 'active' : '' ?>" href="<?= site_url('admin/client') ?>"> Client </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == 'tyre-brand') ? 'active' : '' ?>" href="<?= site_url('admin/tyre-brand') ?>"> Brand </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == '') ? 'active' : '' ?>" href=#"> Size </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == '') ? 'active' : '' ?>" href=#"> Failure Code </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == '') ? 'active' : '' ?>" href=#"> Status Code </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == '') ? 'active' : '' ?>" href=#"> Vehicle Tipe </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == '') ? 'active' : '' ?>" href=#"> Vehicle </a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item <?= ($page == 'tyre-action') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= site_url('admin/tyre-action') ?>">
                            <i class="ti-panel menu-icon"></i>
                            <span class="menu-title">Action</span>
                        </a>
                    </li>

                    <li class="nav-item <?= ($page == '') ? 'active' : '' ?>">
                        <a class="nav-link" href="#">
                            <i class="ti-shine menu-icon"></i>
                            <span class="menu-title">Queries</span>
                        </a>
                    </li>

                    <li class="nav-item <?= ($page == 'tyre-history') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= site_url('admin/tyre-history') ?>">
                            <i class="ti-list menu-icon"></i>
                            <span class="menu-title">Report</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item <?= ($page == 'client-type') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= site_url('admin/client-type') ?>">
                            <i class="ti-tag menu-icon"></i>
                            <span class="menu-title">Client Type</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($page == 'client') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= site_url('admin/client') ?>">
                            <i class="ti-user menu-icon"></i>
                            <span class="menu-title">Client</span>
                        </a>
                    </li> -->

                    <!-- <li class="nav-item <?= (in_array($page, ['tyre-brand', 'tyre', 'tyre-history', 'tyre-action'])) ? 'active' : '' ?>">
                        <a class="nav-link" data-toggle="collapse" href="#tyre" aria-expanded="false" aria-controls="auth">
                            <i class="ti-wheelchair menu-icon"></i>
                            <span class="menu-title">Tyre</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse <?= (in_array($page, ['tyre-brand', 'tyre', 'tyre-history', 'tyre-action'])) ? 'show' : '' ?>" id="tyre">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link <?= ($page == 'tyre') ? 'active' : '' ?>" href="<?= site_url('admin/tyre') ?>"> All </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == 'tyre-brand') ? 'active' : '' ?>" href="<?= site_url('admin/tyre-brand') ?>"> Brand </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == 'tyre-history') ? 'active' : '' ?>" href="<?= site_url('admin/tyre-history') ?>"> History </a></li>
                                <li class="nav-item"> <a class="nav-link <?= ($page == 'tyre-action') ? 'active' : '' ?>" href="<?= site_url('admin/tyre-action') ?>"> Action </a></li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </nav>
            <!-- MAIN PANEL -->
            <div class="main-panel">