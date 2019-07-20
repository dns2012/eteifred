<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
    <main>
        <div class="banner-6" style="background-image : url(<?=$cdnBanner.$banner[0]->image?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 align-self-center text-center">
                        <h1 class="title">
                            Contact Us
                        </h1>
                        <h6 class="subtitle">
                            Stay Connected With Us
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <section class="about no-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="statistic">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-3">
                                    <div class="statistic-list">
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <h4 class="mb-2" style="font-size: 20px;">
                                            Number Phone
                                        </h4>
                                        <p class="text-small">
                                            <?=$information->phone_one?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="statistic-list">
                                        <div class="icon">
                                            <i class="fas fa-fax"></i>
                                        </div>
                                        <h4 class="mb-2" style="font-size: 20px;">
                                            Number Fax
                                        </h4>
                                        <p class="text-small">
                                            <?=$information->fax?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="statistic-list">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <h4 class="mb-2" style="font-size: 20px;">
                                            Email Address
                                        </h4>
                                        <p class="text-small">
                                            <?=$information->email?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-lg-5">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-9">
                                    <form action="<?=site_url('contact/form/action')?>" method="POST">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="name" placeholder="name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="email" placeholder="email" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="phone" placeholder="phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="location" placeholder="location">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="3" placeholder="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <button type="submit" class="btn btn-block btn-primary btn-lg">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <iframe src="<?=$information->maps?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>