        <!-- FOOTER-->
        <footer>
            <div class="footer-main">
            <a name="kontakt" id="kontakt" href=""></a>
                <div class="container">
                    <div class="footer-main-wrapper">
                        <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="edugate-widget widget kontakt">
                                        <div class="title-widget">Kontakt</div>
                                        <div class="content-widget">
                                            <div class="info-list">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-envelope-o"></i><a href="#"><?php the_field('emailova_adresa',163) ?></a></li>
                                                    <li><i class="fa fa-phone"></i><a href="tel:<?php the_field('telefonne_cislo',163) ?>"><?php the_field('telefonne_cislo',163) ?></a></li>
                                                    <li><i class="fa fa-map-marker"></i>
                                                        <a href="#">
                                                            <p><?php the_field('firemna_adresa_ulica',163) ?></p>
                                                            <p><?php the_field('firemna_adresa_mesto',163) ?></p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-6">
                                    <div class="mailing-widget widget">
                                        <div class="title-widget">Napíšte nám</div>
                                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
                                    </div>
                                </div>
                        </div> <!-- end of row -->
                    </div>
                </div> <!-- end of container -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="map-wrapper">
                                <div class="overlay" onClick="style.pointerEvents='none'"></div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.4738587136253!2d18.617738515485026!3d48.772843114680654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4714dcf1c911d323%3A0x737b64512a616081!2sMgr.+J%C3%A1n+Svitok+-+TOP+Systemsa!5e0!3m2!1ssk!2ssk!4v1494414475697" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>  
                            </div>
                        </div> <!-- end of row -->
                    </div>
                    <div class="container">
                    <div class="hyperlink">
                        <div class="pull-left hyper-left">
                            <ul class="list-inline">
                                <li><a href="index.html">Domov</a></li>
                                <li><a href="courses.html">Kurzy</a></li>
                                <li><a href="about-us.html">Re-pas</a></li>
                                <li><a href="404.html">Obchodne podmienky</a></li>
                            </ul>
                        </div>
                        <div class="pull-right hyper-right">@ SWLABS</div>
                    </div>
                </div> <!-- end of container -->
            </div>
        </footer>
        <!-- LOADING-->
        <!-- <div class="body-2 loading">
            <div class="dots-loader"></div>
        </div> -->
        <!-- JAVASCRIPT LIBS-->
        <!--script.-->
        <!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {-->
        <!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');-->
        <!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {-->
        <!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');-->
        <!--    }-->
        <!-- <script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script> -->
        <!-- <script src="assets/libs/count-to/jquery.countTo.js"></script> -->
        <!-- <script src="assets/libs/fancybox/js/jquery.fancybox.js"></script> -->
        <!-- <script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script> -->
        <!-- MAIN JS-->
        <?php wp_footer(); ?>
</body>

</html>