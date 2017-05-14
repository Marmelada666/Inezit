<?php /* WP Post Template: uctovnictvo */  ?>
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
										<?php while (have_posts() ) : the_post()  ?>
                                        	<!-- Ucebny plan tabulka -->
                                        		<div class="syllabus-wrapper">
                                                <?php $table = get_field('osnova_1') ?>
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
                                                <?php $i = 1 ?>
                                                <div id="<?php echo 'collapsible' . $b ?>" class="collapse">
                                                <?php do { ?>
                                                <?php $i++ ?>
                                                <?php $syllabus = 'osnova_' . $i ?>
                                                <?php $table = get_field($syllabus) ?>
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
                                                <?php } while ( $i < 6); ?>
                                                </div> <!-- end of collapsible wrapper, nesmie byt v cykle 1.1 -->
                                                <a href="<?php echo '#collapsible' . $b ?>" data-toggle="collapse">Celý plán</a>
                                                </div>
                                        <?php endwhile ?>
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
                                    </div>
                                    <div class="row">
                                        <?php
                                        if ( have_posts() ) :
                                            while ( have_posts() ) : the_post();
                                                get_template_part( 'template-parts/widget', 'podobneKurzy' );
                                            endwhile;
                                        else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
                                            get_template_part( 'template-parts/post/content', 'none' );
                                        endif; ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- Prihlaska -->
                            <?php
                            if ( have_posts() ) :
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/widget', 'prihlaska' );
                                endwhile;
                            else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
                                get_template_part( 'template-parts/post/content', 'none' );
                            endif; ?>
                        </div> <!-- end of container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<?php get_footer(); ?>
