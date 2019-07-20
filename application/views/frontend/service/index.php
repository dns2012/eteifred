<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
    <main>
        <div class="banner-6" style="background-image : url(<?=$cdnBanner.$banner[0]->image?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 align-self-center text-center">
                        <h1 class="title">
                            ALNOOR GARMENTS SERVICES
                        </h1>
                        <h6 class="subtitle">
                            <!-- We are Small Team of Creative People working together -->
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <img src="<?=$cdnService.$scheme->image?>" class="w-100">
                    </div>
                </div>

                <?php $i=1; foreach($service as $service): ?>
                <div class="row services <?=($i%2==0)?'flex-row-reverse flex-row-lg':'flex-row-lg-reverse'?> mb-4">
                    <div class="col-12 col-lg-4">
                        <img src="<?=$cdnService.$service->image?>" class="img-fluid mb-4 mb-lg-0" alt="">
                    </div>
                    <div class="col-12 col-lg-8 <?=($i%2==0)?'text-lg-right':''?>">
                        <h3>
                            <?=$service->name?>
                        </h3>
                        <?=$service->description?>
                    </div>
                </div>
                <?php $i++; endforeach ?>
                
                <!-- ADVANTAGE -->
                <!-- <div class="row services flex-row-reverse flex-row-lg mb-4">
                    <div class="col-12 col-lg-4">
                        <img src="assets/img/services/sampling.jpg" class="img-fluid mb-4 mb-lg-0" alt="">
                    </div>
                    <div class="col-12 col-lg-8 text-lg-right">
                        <h3>
                            Sampling
                        </h3>
                        <p>
                            A dedicated sampling department at Al Noor uses latest technology such as computerized pattern and marker system and other sewing methods to create samples for clients.
                        </p>
                    </div>
                </div> -->

                
            </div>
        </section>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>