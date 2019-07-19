<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
    <main>
        <div class="banner-6" style="background-image : url(<?=$cdnBanner.$banner[0]->image?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 align-self-center text-center">
                        <h1 class="title">
                            ALNOOR GARMENTS GALLERY
                        </h1>
                        <h6 class="subtitle">
                            <!-- We are Small Team of Creative People working together -->
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <section class="gallery">
            <div class="container">
                <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ALL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">IMAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">VIDEO</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="container">
                            <div class="row">
                                <?php foreach($galleryAll as $galleryAll) { ?>
                                    <div class="col-12 col-lg-3">
                                        <div class="galleries-card">
                                            <div class="galleries-image">
                                                <figure class="image">
                                                    <?php if($galleryAll->type == 1) { ?>
                                                        <img src="<?=$cdnGallery.$galleryAll->object?>" alt="">
                                                    <?php ;} else { ?>
                                                        <?php if(!empty($galleryAll->thumbnail)) { ?>
                                                            <img src="<?=$cdnGallery.$galleryAll->thumbnail?>" alt="">
                                                        <?php ;} else { ?>
                                                            <img src="<?=$image?>vthumbnail3.jpeg" alt="">
                                                        <?php ;} ?>
                                                    <?php ;} ?>
                                                </figure>
                                                <div class="option-box">
                                                    <a href="<?=$cdnGallery.$galleryAll->object?>" data-fancybox data-caption="<?=$galleryAll->caption?>">
                                                        <?php if($galleryAll->type == 1) { ?>
                                                            <i class="fas fa-camera"></i>
                                                        <?php ;} else { ?>
                                                            <i class="fas fa-video"></i>
                                                        <?php ;} ?> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php ;} ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="container">
                            <div class="row">
                                <?php foreach($galleryImage as $galleryImage) { ?>
                                    <div class="col-12 col-lg-3">
                                        <div class="galleries-card">
                                            <div class="galleries-image">
                                                <figure class="image">
                                                    <?php if($galleryImage->type == 1) { ?>
                                                        <img src="<?=$cdnGallery.$galleryImage->object?>" alt="">
                                                    <?php ;} else { ?>
                                                        <?php if(!empty($galleryImage->thumbnail)) { ?>
                                                            <img src="<?=$cdnGallery.$galleryImage->thumbnail?>" alt="">
                                                        <?php ;} else { ?>
                                                            <img src="<?=$image?>vthumbnail3.jpeg" alt="">
                                                        <?php ;} ?>
                                                    <?php ;} ?>
                                                </figure>
                                                <div class="option-box">
                                                    <a href="<?=$cdnGallery.$galleryImage->object?>" data-fancybox data-caption="<?=$galleryImage->caption?>">
                                                        <?php if($galleryImage->type == 1) { ?>
                                                            <i class="fas fa-camera"></i>
                                                        <?php ;} else { ?>
                                                            <i class="fas fa-video"></i>
                                                        <?php ;} ?> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php ;} ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="container">
                            <div class="row">
                                <?php foreach($galleryVideo as $galleryVideo) { ?>
                                    <div class="col-12 col-lg-3">
                                        <div class="galleries-card">
                                            <div class="galleries-image">
                                                <figure class="image">
                                                    <?php if($galleryVideo->type == 1) { ?>
                                                        <img src="<?=$cdnGallery.$galleryVideo->object?>" alt="">
                                                    <?php ;} else { ?>
                                                        <?php if(!empty($galleryVideo->thumbnail)) { ?>
                                                            <img src="<?=$cdnGallery.$galleryVideo->thumbnail?>" alt="">
                                                        <?php ;} else { ?>
                                                            <img src="<?=$image?>vthumbnail3.jpeg" alt="">
                                                        <?php ;} ?>
                                                    <?php ;} ?>
                                                </figure>
                                                <div class="option-box">
                                                    <a href="<?=$cdnGallery.$galleryVideo->object?>" data-fancybox data-caption="<?=$galleryVideo->caption?>">
                                                        <?php if($galleryVideo->type == 1) { ?>
                                                            <i class="fas fa-camera"></i>
                                                        <?php ;} else { ?>
                                                            <i class="fas fa-video"></i>
                                                        <?php ;} ?> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php ;} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>