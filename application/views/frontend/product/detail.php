<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
    <main>
        <div class="banner-6" style="background-image : url(<?=$cdnBanner.$banner[0]->image?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 align-self-center text-center">
                        <h1 class="title">
                            <?=$product->name?>
                        </h1>
                        <h6 class="subtitle">
                            <!-- We are Small Team of Creative People working together -->
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <section class="product-detail">
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-12 col-lg-3">
                            <div class="slider-zoom">
                                <a href="<?=$cdnProduct.$product->image?>" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                                    <img alt="Detail Zoom thumbs image" src="<?=$cdnProduct.$product->image?>" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="post">
                                <div class="post-content">
                                    <h2>
                                        <?=$product->name?>
                                    </h2>
                                    <?=$product->description?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-widget">
                                    <h4 class="sidebar-widget-title">
                                        Another Products
                                    </h4>
                                    <?php foreach($another as $another) : ?>
                                    <div class="media post-item">
                                        <img src="<?=$cdnProduct.$another->image?>" alt="">
                                        <div class="media-body">
                                            <a href="<?=site_url('product/detail/'.$another->id.'/'.url_title(strtolower($another->name)))?>">
                                                <h3>
                                                    <?=$another->name?>
                                                </h3>
                                            </a>
                                            <p>
                                                - Alnoor Garments
                                            </p>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>