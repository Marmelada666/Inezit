<!DOCTYPE html>
<html lang="en">
<head>
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
    <header>
        <nav>
            <a href="#" class="logo-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="-400.3 265 139.4 37.3" class="main-logo">
                  <style>
                    .lg0{fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;} .lg1{fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;} .lg2{fill:#fff; stroke: none;}
                  </style>
                  <path d="M-355.6 283.5v6.8l-16.8 10.1-16.5-10.2v-6.8m38.4-2.8V292m0 0l1.7 2.5-1.7 3-1.7-3 1.7-2.5z" class="lg0"/>
                  <path d="M-372.2 292.4l-26.5-14 26.5-11.5 26.1 11.5-26.1 14z" class="lg0"/>
                  <path d="M-734.4 640.6v10.9l-26.9 16.2-26.4-16.3v-10.9m61.5-4.6v18.3m0 0l2.7 4-2.7 4.8-2.7-4.8 2.7-4z" class="lg1"/>
                  <path d="M-761 654.7l-42.4-22.4 42.4-18.4 41.8 18.4-41.8 22.4z" class="lg1"/>
                  <path d="M-327.2 294h-3.5v-20.5h3.5V294zm17.7 0h-3.3v-8.2c0-2.7-1-4.1-2.9-4.1-1 0-1.8.4-2.5 1.1-.7.8-1 1.7-1 2.9v8.3h-3.3v-14.6h3.3v2.4h.1c1.1-1.8 2.7-2.8 4.7-2.8 1.6 0 2.8.5 3.6 1.5s1.3 2.5 1.3 4.5v9zm16.4-6.5h-10c0 1.4.5 2.4 1.2 3.1.8.7 1.9 1.1 3.3 1.1 1.6 0 3-.5 4.3-1.4v2.7c-1.3.8-3.1 1.3-5.3 1.3-2.2 0-3.8-.7-5.1-2s-1.8-3.2-1.8-5.6c0-2.3.7-4.1 2-5.6 1.3-1.4 3-2.1 5-2.1s3.5.6 4.6 1.9 1.6 3.1 1.6 5.4v1.2zm-3.2-2.3c0-1.2-.3-2.1-.8-2.8-.6-.7-1.3-1-2.3-1-1 0-1.8.3-2.4 1-.7.7-1.1 1.6-1.2 2.7h6.7zm17.2-4.5l-7.9 10.7h7.9v2.6h-12.5v-1.2l8.1-10.8h-7.3v-2.6h11.8v1.3zm4.4-4.4c-.5 0-1-.2-1.4-.5-.4-.4-.6-.8-.6-1.3s.2-1 .6-1.4.8-.5 1.4-.5c.6 0 1 .2 1.4.5.4.4.6.8.6 1.4 0 .5-.2 1-.6 1.3-.3.3-.8.5-1.4.5zm1.7 17.7h-3.3v-14.6h3.3V294zm12-.2c-.6.3-1.5.5-2.6.5-2.8 0-4.3-1.4-4.3-4.1v-8.3h-2.4v-2.6h2.4V276l3.3-.9v4.3h3.5v2.6h-3.5v7.3c0 .9.2 1.5.5 1.9.3.4.8.6 1.6.6.6 0 1-.2 1.5-.5v2.5z" class="lg2"/>
                </svg>
            </a>
            <div class="contact-wrapper">
                <li><i class="fa fa-envelope-o"></i><a href="mailto:<?php the_field('emailova_adresa',163) ?>"><?php the_field('emailova_adresa',163) ?></a></li>
                <li><i class="fa fa-phone"></i><a href="tel:<?php the_field('telefonne_cislo',163) ?>"><?php the_field('telefonne_cislo',163) ?></a></li>
            </div> 
            <div class="links-wrapper">
                <ul class="nav-links">
                    <li "><a class="<?php if (is_page('kurzy') || ! empty ($GLOBALS['post']) && is_single() && in_category('kurzy', $GLOBALS['post']) ){echo 'active';} ?>" href="http://localhost/wordpress/kurzy/">Kurzy</a></li>
                    <li ><a class="<?php if (is_page('repas')){echo 'active';} ?>" href="http://localhost/wordpress/repas/">Re-pas</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                </ul>
            </div>   
        </nav>                
    </header>