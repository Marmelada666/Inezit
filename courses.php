<?php /* Template Name: all courses */  ?>
<?php get_header(); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Všetky kurzy</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Domov</a></li>
                                <li class="active"><a href="courses-detail.php">Kurzy</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="search-input">
                        <div class="container">
                            <div class="search-input-wrapper">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses">
                    <div class="container">
                        <div class="row kategoria">
                            <div class="group-title-index">
                                <!-- <h4 class="top-title">CHOOSE YOUR COURSE</h4> -->
                                <h2 class="center-title">Počítačové kurzy</h2>
                                <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                            </div>
                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'category_name' => 'pocitacove-kurzy'
                                );

                                $post_query = new WP_Query($args);
                            if($post_query->have_posts() ) {
                              while($post_query->have_posts() ) {
                                $post_query->the_post();
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 no-padding-xs karta-kurzy">
                                    <!--karta-->
                                    <div class="thumbnail">
                                        <a href=" <?php the_permalink() ?> ">
                                            <div class="background-opacity-1">
                                                <div class="kurz-img" style="background-image: url(<?php the_field('ikonka_kurzu') ?>);"></div>
                                            </div>
                                        </a>
                                        <div class="caption">
                                            <div class="titul-kurzu text-center">
                                                <a href="<?php the_permalink() ?>" class="titulok"><?php the_title() ?></a>
                                            </div>
                                            <div class="kurz-info">
                                                <div class="popis-kurzu">
                                                    <span class="cena"><?php the_field('cena_kurzu') ?> €</span><span class="hodiny"> 80 hodin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end of karta-->
                                <?php
                              }
                            }
                            ?>                            
                        </div> <!-- end of row -->
                        <div class="row kategoria">
                            <div class="group-title-index">
                                <!-- <h4 class="top-title">CHOOSE YOUR COURSE</h4> -->
                                <h2 class="center-title">Účtovníctvo</h2>
                                <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                            </div>
                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'category_name' => 'uctovnictvo'
                                );

                                $post_query = new WP_Query($args);
                            if($post_query->have_posts() ) {
                              while($post_query->have_posts() ) {
                                $post_query->the_post();
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 no-padding-xs karta-kurzy">
                                    <!--karta-->
                                    <div class="thumbnail">
                                        <a href=" <?php the_permalink() ?> ">
                                            <div class="kurz-img" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"></div>
                                        </a>
                                        <div class="caption">
                                            <div class="titul-kurzu text-center">
                                                <a href="<?php the_permalink() ?>" class="titulok"><?php the_title() ?></a>
                                            </div>
                                            <div class="kurz-info">
                                                <div class="popis-kurzu">
                                                    <span class="cena"><?php the_field('cena_kurzu') ?> €</span><span class="hodiny"> 80 hodin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end of karta-->
                                <?php
                              }
                            }
                            ?>                            
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of section  -->
            </div> <!-- end of content -->
        </div> <!-- end of main content  -->
    </div><!--  end of page wrapper -->
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div> <!-- end of wrapper content -->
<?php get_footer(); ?>
