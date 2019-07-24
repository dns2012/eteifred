<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
    <style>
        .statistic-list .icon > img {
            width : 45px;
            height: 45px;
        }
    </style>
    <main>
        <div class="banner-6" style="background-image : url(<?=$cdnBanner.$banner[0]->image?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 align-self-center text-center">
                        <h1 class="title">
                            About Alnoor Garments
                        </h1>
                        <h6 class="subtitle">
                            <!-- We are Small Team of Creative People working together -->
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <section class="about no-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                    <div class="statistic">
                            <div class="row">
                                <?php if(!empty($about->item_one_image)): ?>
                                    <div class="col-12 col-lg-3">
                                        <div class="statistic-list">
                                            <div class="icon">
                                                <img src="<?=$cdnAbout.$about->item_one_image?>">
                                            </div>
                                            <h4>
                                                <?=$about->item_one_number?>
                                            </h4>
                                            <p>
                                                <?=$about->item_one_title?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if(!empty($about->item_two_image)): ?>
                                    <div class="col-12 col-lg-3">
                                        <div class="statistic-list">
                                            <div class="icon">
                                                <img src="<?=$cdnAbout.$about->item_two_image?>">
                                            </div>
                                            <h4>
                                                <?=$about->item_two_number?>
                                            </h4>
                                            <p>
                                                <?=$about->item_two_title?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if(!empty($about->item_three_image)): ?>
                                    <div class="col-12 col-lg-3">
                                        <div class="statistic-list">
                                            <div class="icon">
                                                <img src="<?=$cdnAbout.$about->item_three_image?>">
                                            </div>
                                            <h4>
                                                <?=$about->item_three_number?>
                                            </h4>
                                            <p>
                                                <?=$about->item_three_title?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if(!empty($about->item_four_image)): ?>
                                    <div class="col-12 col-lg-3">
                                        <div class="statistic-list">
                                            <div class="icon">
                                                <img src="<?=$cdnAbout.$about->item_four_image?>">
                                            </div>
                                            <h4>
                                                <?=$about->item_four_number?>
                                            </h4>
                                            <p>
                                                <?=$about->item_four_title?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <?=$about->about?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>