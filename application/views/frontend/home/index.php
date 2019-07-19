<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
    <main>
        <div class="slider-1">
            <div class="container-fluid p-0">
                <div class="owl-carousel" id="slider-1">
                    <?php foreach($banner as $banner) : ?>
                    <div class="item">
                        <img src="<?=$cdnBanner.$banner->image?>" class="image">
                        <div class="text text-center">
                            <h2><?=$banner->title?></h2>
                            <p>
                                <span>
                                    <?=$banner->description?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <section class="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="section-title">
                            <h1 class="mb-0">
                                <div class="section-title">
                                    <div class="title">
                                        About <span> Alnoor Garments </span>
                                    </div>
                                    <div class="separate">
                                        <i class="fas fa-boxes"></i>
                                    </div>
                                </div>
                            </h1>
                        </div>
                        <div class="about-description mb-lg-5">
                           <?=word_limiter($about->about, 50)?> <a href="<?=site_url('about')?>">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h1 class="mb-0">
                                <div class="section-title">
                                    <div class="title">
                                        <span>Alnoor Garments </span> Products
                                    </div>
                                    <div class="separate">
                                        <i class="fas fa-boxes"></i>
                                    </div>
                                </div>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel" id="products">
                            <?php foreach($product as $product) : ?>
                            <div class="item">
                                <div class="properties-card">
                                    <div class="properties-image">
                                        <figure class="image">
                                            <img src="<?=$cdnProduct.$product->image?>" alt="">
                                        </figure>
                                        <span class="for">
                                            FOR SALE
                                        </span>
                                        <div class="info">
                                            <!-- <a href="javascript:void(0);">
                                                <i class="far fa-calendar-alt"></i> 1 Months Ago
                                            </a>
                                            <a href="javascript:void(0);">
                                                <i class="far fa-user"></i> John Doe
                                            </a> -->
                                        </div>
                                    </div>
                                    <div class="properties-description">
                                        <ul class="tags">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    Alnoor Garments
                                                </a>
                                            </li>
                                        </ul>
                                        <h3>
                                            <a href="<?=site_url('product/detail/'.$product->id.'/'.url_title(strtolower($product->name)))?>">
                                                <?=$product->name?>
                                            </a>
                                        </h3>
                                        <div class="location">
                                        <?=word_limiter($product->description, 10)?>
                                        </div>
                                        <div class="price-area">
                                            <div class="read-more">
                                                <a href="<?=site_url('product/detail/'.$product->id.'/'.url_title(strtolower($product->name)))?>" class="btn-price">
                                                    SHOP NOW
                                                </a>
                                            </div>
                                            <div class="price"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h1 class="mb-0">
                                <div class="section-title">
                                    <div class="title">
                                        <span>Alnoor Garments </span> Galleries
                                    </div>
                                    <div class="separate">
                                        <i class="fas fa-boxes"></i>
                                    </div>
                                </div>
                            </h1>
                        </div>
                    </div>
                </div>
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
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-3">
                                    <a href="<?=site_url('gallery')?>" class="btn btn-block btn-primary">
                                        Lihat Semua
                                    </a>
                                </div>
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
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-3">
                                    <a href="<?=site_url('gallery')?>" class="btn btn-block btn-primary">
                                        Lihat Semua
                                    </a>
                                </div>
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
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-3">
                                    <a href="<?=site_url('gallery')?>" class="btn btn-block btn-primary">
                                        Lihat Semua
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-1">
                            <div class="container nav-container">
                                <div class="testimonial-slider owl-carousel" id="testimonial-slider">
                                    <?php foreach($testimonial as $testimonial) : ?>
                                    <div class="item text-center">
                                        <div class="img">
                                            <img src="<?=$cdnTestimonial.$testimonial->image?>">
                                        </div>
                                        <div class="author">
                                            <h6><?=$testimonial->name?></h6>
                                            <p><?=$testimonial->profession?></p>
                                        </div>
                                        <?=$testimonial->testimonial?>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>