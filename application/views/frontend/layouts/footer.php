<footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 px-lg-4">
                    <div class="footer-description">
                        <img src="<?=$image?>LogoAlNoor.png" alt="" class="img-fluid">
                        <?=$information->tagline?>
                    </div>
                    <div class="social">
                        <a href="<?=$information->facebook?>" target="__blank" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?=$information->twitter?>" target="__blank" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="<?=$information->gplus?>" target="__blank" class="gplus">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="<?=$information->instagram?>" target="__blank" class="instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-lg-4">
                    <div class="footer-title">
                        <h5>
                            LINKS
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <ul class="link">
                                <li>
                                    <a href="<?=site_url('/')?>">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url('about')?>">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url('product')?>">
                                        Products
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="link">
                                <li>
                                    <a href="<?=site_url('service')?>">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url('gallery')?>">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url('contact')?>">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-lg-4">
                    <div class="footer-title">
                        <h5>
                            CONTACT
                        </h5>
                    </div>
                    <div class="footer-contact">
                        <div class="list-contact">
                            <i class="fas fa-phone"></i> <span><?=$information->phone_one?></span>
                        </div>
                        <!-- <div class="list-contact">
                            <i class="fas fa-phone"></i> <span><?=$information->phone_two?></span>
                        </div> -->
                        <div class="list-contact">
                            <i class="fas fa-envelope"></i> <span><?=$information->email?></span>
                        </div>
                        <!-- <div class="list-contact">
                            <i class="fas fa-map-marker-alt"></i> <span>Jl. Jakarta</span>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        Copyright &copy; Alnoor Garments 2019. All right reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="back-to-top">
        <a href="javascript:void(0);">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>

    <!-- Source JS We Use -->
    <script type="text/javascript" src="<?=$plugin?>bootstrap/jquery.js"></script>
    <script type="text/javascript" src="<?=$plugin?>bootstrap/popper.js"></script>
    <script type="text/javascript" src="<?=$plugin?>bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="<?=$plugin?>owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=$plugin?>select2/select2.js"></script>
    <script type="text/javascript" src="<?=$plugin?>fancybox/fancybox.js"></script>
    <script type="text/javascript" src="<?=$js?>theme.js"></script>
    <!-- End Source JS We Use -->
</body>
</html>