<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
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
                        <?=$about->about?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>