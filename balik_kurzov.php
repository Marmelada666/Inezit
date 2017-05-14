<?php /* WP Post Template: balik kurzov */  ?>
<?php $actualPage = 'kurzy' ?>
<?php get_header(); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title-post set-height-top" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
                    <div class="container">
                        <div class="page-title-post-wrapper"><!--.page-title-content--><h2 class="captions"><?php the_title(); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Domov</a></li>
                                <li><a href="courses.php">Kurzy</a></li>
                                <li><a href="courses-detail.php"><?php the_title(); ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses-detail">
                    <div class="container">
                        <div class="courses-detail-wrapper">
                            <div class="row">
                                <div class="col-md-9 layout-left">
                                    <div class="course">
                                        <?php while (have_posts() ) : the_post()  ?>
                                            <?php the_content(); ?>
                                        <?php endwhile ?>
                                    </div>
                                    <div class="syllabus">
                                            <!-- Ucebny plan tabulka -->
                                                <?php $b = -1 ?>
                                                <!-- pole s kurzmi, zatial natvrdo-->
                                                <?php $kurzy = array('121','14','72','88','79','85') ?>
                                                <!-- 1. Prvy cylkus = vypis vsetkych kurzov -->
                                                <?php do { ?>
                                                    <div class="syllabus-wrapper">
                                                    <!-- Nazov kurzu -->
                                                    <h3><?php echo esc_html( get_the_title($kurzy[$b +1]) ); ?></h3>
                                                    <?php $h = 0 ?>
                                                    <?php $i = 1 ?>
                                                    <?php $h++ ?>
                                                    <?php $b++ ?>
                                                    <?php $syllabus = 'osnova_' . $h ?>
                                                    <?php $table = get_field($syllabus, $kurzy[$b]) ?> <!-- prva cast osnovy -->
                                                    <?php 
                                                        if ( $table ) {
                                                            echo '<table border="0">';

                                                                if ( $table['header'] ) {

                                                                    echo '<thead>';

                                                                        echo '<tr>';

                                                                            foreach ( $table['header'] as $th ) {

                                                                                echo '<th>';
                                                                                    echo $th['c'];
                                                                                echo '</th>';
                                                                            }

                                                                        echo '</tr>';

                                                                    echo '</thead>';
                                                                }

                                                                echo '<tbody>';

                                                                    foreach ( $table['body'] as $tr ) {

                                                                        echo '<tr>';

                                                                            foreach ( $tr as $td ) {
                                                                                echo '<td>';
                                                                                echo'<i class="material-icons">&#xE873;</i>';
                                                                                    echo $td['c'];
                                                                                echo '</td>';
                                                                            }

                                                                        echo '</tr>';
                                                                    }

                                                                echo '</tbody>';

                                                            echo '</table>';
                                                        }
                                                    ?>
                                                    <!-- 1.1 cyklus v cykle = osnovy kurzu -->
                                                    <div id="<?php echo 'collapsible' . $b ?>" class="collapse">
                                                    <?php do { ?>
                                                    <?php $i++ ?>
                                                    <?php $syllabus = 'osnova_' . $i ?>
                                                    <?php $table = get_field($syllabus, $kurzy[$b]) ?> <!-- Zbytok osnovy (schovaty) -->
                                                    <?php 
                                                        if ( $table ) {
                                                            echo '<table border="0">';

                                                                if ( $table['header'] ) {

                                                                    echo '<thead>';

                                                                        echo '<tr>';

                                                                            foreach ( $table['header'] as $th ) {

                                                                                echo '<th>';
                                                                                    echo $th['c'];
                                                                                echo '</th>';
                                                                            }

                                                                        echo '</tr>';

                                                                    echo '</thead>';
                                                                }

                                                                echo '<tbody>';

                                                                    foreach ( $table['body'] as $tr ) {

                                                                        echo '<tr>';

                                                                            foreach ( $tr as $td ) {
                                                                                echo '<td>';
                                                                                echo'<i class="material-icons">&#xE873;</i>';
                                                                                    echo $td['c'];
                                                                                echo '</td>';
                                                                            }

                                                                        echo '</tr>';
                                                                    }

                                                                echo '</tbody>';

                                                            echo '</table>';
                                                        }
                                                    ?>
                                                    <?php } while ( $i < 3); ?> <!-- Koniec cyklu 1.1-->
                                                    </div> <!-- end of collapsible wrapper, nesmie byt v cykle 1.1 -->
                                                    <a href="<?php echo '#collapsible' . $b ?>" data-toggle="collapse">Celý plán</a>
                                                    </div>
                                                <?php } while ($b < count($kurzy)-1) ?><!--  Koniec cyklu 1-->
                                        </div>
                                </div>
                                <div class="col-md-3 sidebar">
                                    <div class="row">
                                        <?php
                                        if ( have_posts() ) :
                                            while ( have_posts() ) : the_post();
                                                get_template_part( 'template-parts/widget', 'parametre' );
                                            endwhile;
                                        else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
                                            get_template_part( 'template-parts/post/content', 'none' );
                                        endif; ?>
                                        <div class="clearfix"></div>
                                        <div class="popular-course-widget widget col-sm-6 col-sm-12">
                                            <div class="title-widget">Podobne kurzy</div>
                                            <div class="content-widget">
                                                <div class="media">
                                                    <div class="media-left"><a href="courses-detail.php" class="link"><img src="img/bg-kurz.jpg" alt="" class="media-image"/></a></div>
                                                    <div class="media-right">
                                                        <div class="cur">35</div>
                                                        <a href="courses-detail.php" class="link title">Adobe Lightroom CC for Photographers</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#"><span>By Sandara</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left"><a href="courses-detail.php" class="link"><img src="img/bg-kurz.jpg" alt="" class="media-image"/></a></div>
                                                    <div class="media-right">
                                                        <div class="cur">40</div>
                                                        <a href="courses-detail.php" class="link title">Adobe Lightroom CC for Photographers</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#"><span>By Sandara</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left"><a href="courses-detail.php" class="link"><img src="img/bg-kurz.jpg" alt="" class="media-image"/></a></div>
                                                    <div class="media-right">
                                                        <div class="cur">34</div>
                                                        <a href="courses-detail.php" class="link title">Adobe Lightroom CC for Photographers</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#"><span>By Sandara</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left"><a href="courses-detail.php" class="link"><img src="img/bg-kurz.jpg" alt="" class="media-image"/></a></div>
                                                    <div class="media-right">
                                                        <div class="cur">27</div>
                                                        <a href="courses-detail.php" class="link title">Adobe Lightroom CC for Photographers</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#"><span>By Sandara</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container">
        <!-- Modal -->
<!-- Prihlaska -->
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/widget', 'prihlaska' );
        endwhile;
    else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
        get_template_part( 'template-parts/post/content', 'none' );
    endif; ?>
    </div>
</div>
<?php get_footer(); ?>