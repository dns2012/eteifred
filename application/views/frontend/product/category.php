<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
    <main>
        <div class="banner-6" style="background-image : url(<?=$cdnBanner.$banner[0]->image?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 align-self-center text-center">
                        <h1 class="title">
                            <?=$category->name?>
                        </h1>
                        <h6 class="subtitle">
                            <!-- We are Small Team of Creative People working together -->
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <section class="products">
            <div class="container">
                <div class="row">
                    <?php foreach($product as $product) : ?>
                    <div class="col-12 col-lg-3">
                        <div class="properties-card">
                            <div class="properties-image">
                                <figure class="image">
                                    <img src="<?=$cdnProduct.$product->image?>" alt="">
                                </figure>
                                <span class="for">
                                    FOR SALE
                                </span>
                            </div>
                            <div class="properties-description">
                                <ul class="tags">
                                    <li>
                                        <a href="<?=site_url('product/category/'.$product->category_id.'/'.url_title(strtolower($product->category)))?>">
                                            <?=strtoupper($product->category)?>
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
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </main>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>