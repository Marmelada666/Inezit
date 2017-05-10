<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edugate | ver 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <!-- LIBRARY CSS-->
    <!-- <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css"> -->
    <!-- <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css"> -->
    <!-- <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css"> -->
    <!-- <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css"> -->
    <!-- <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css"> -->
    <!-- STYLE CSS    -->
    <!-- <link type="text/css" rel="stylesheet" href="assets/css/color-1.css"> -->
    <!--link(type="text/css", rel='stylesheet', href='#', id="color-skins")-->
    <!--script.-->
    <!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {-->
    <!--        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');-->
    <!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {-->
    <!--        $('#color-skins').attr('href', 'assets/css/color-1.css');-->
    <!--    }-->
    <?php wp_head(); ?>
</head>
    <body>
    <!-- HEADER-->
    <header>
        <div class="header-topbar homepage-03">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 topbar-left text-left info-text1">
                        <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span><?php the_field('emailova_adresa',163) ?></span></a></div>
                        <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span><?php the_field('telefonne_cislo',163) ?></span></a></div>
                    </div>
                    <div class="col-md-2 logo-topbar info-text2">
                        <a href="http://localhost/wordpress/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo.svg" alt="" /></a>
                    </div>
                    <!-- <div class="col-md-5 topbar-right text-right info-text3">
                    <div class="group-sign-in"><a href="login.html" class="login">login</a><a href="register.html" class="register">register</a></div>
                </div> -->
                </div>
            </div>
        </div>
        <?php $i = true ?>
        <div class="header-main homepage-03">
            <div class="container">
                <div class="header-main-wrapper">
                    <nav class="navigation">
                        <ul class="nav-links nav navbar-nav">
                            <li class="<?php if (is_front_page()){echo 'active';} ?>"><a href="http://localhost/wordpress/domov/" class="main-menu">Domov</a></li>
                            <li class="<?php if (is_page('kurzy') || ! empty ($GLOBALS['post']) && is_single() && in_category('kurzy', $GLOBALS['post']) ){echo 'active';} ?>"><a href="http://localhost/wordpress/kurzy/" class="main-menu">Kurzy</a></li>
                            <li class="<?php if (is_page('repas')){echo 'active';} ?>"><a href="http://localhost/wordpress/repas/" class="main-menu">Re-pas</a></li>
                            <li><a href="#kontakt" class="main-menu">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>