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
                                                <?php $i = 0 ?>
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
                                                <?php } while ( $i < 3); ?>
                                        <?php endwhile ?>
                                        </div>
                                </div> <!-- end of layout left -->
                                <div class="col-md-3 sidebar">
                                    <div class="row">
                                        <div class="course-price-widget col-sm-6 col-md-12 col-sm-offset-3 col-md-offset-0">
                                            <div class="title-widget"><p><?php the_field('cena_kurzu',get_the_id()) ?></p></div>
                                            <div class="content-widget">
                                                <div class="course-price-widget-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-12 info-row col-sm-12 col-xs-12">
                                                            <div class="pull-left title">Dlzka:</div>
                                                            <div class="pull-right length">180 h</div>
                                                        </div>
                                                        <div class="col-md-12 info-row col-sm-12 col-xs-12">
                                                            <div class="pull-left title">Uroven:</div>
                                                            <div class="pull-right level">Zaciatocnik</div>
                                                        </div>
                                                        <div class="col-md-12 info-row col-sm-12 col-xs-12">
                                                            <div class="pull-left title">Pocet modulov:</div>
                                                            <div class="pull-right firgue">1</div>
                                                        </div>
                                                        <div class="col-md-12 info-row col-sm-12 col-xs-12">
                                                            <div class="pull-left title">Hodnotenie:</div>
                                                            <div title="Rated 5.00 out of 5" class="pull-right star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-green" data-toggle="modal" data-target="#prihlaska"><span>Prihlasit</span></button>
                                                </div>
                                            </div>
                                        </div>
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
                                </div> <!-- end of sidebar -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of page wrapper -->
        <!-- Modal -->
        <div class="modal fade" id="prihlaska" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="modal-close-btn" aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-xs-4 col-md-3">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo-inverse.svg" alt="Inezit" class="img-responsive"/>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p><strong>Prihláška</strong><br>(Prihlásenie na kurz je nezáväzné)</p>
                    </div>
                </div>
                </div>
                <div class="modal-body">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
                </div>
            </div>
          </div>
        </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<?php get_footer(); ?>