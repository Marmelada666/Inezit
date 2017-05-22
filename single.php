<?php get_header(); ?>
<?php $actualPage = 'kurzy' ?>
<!-- WRAPPER-->
<?php $titulok = 'ja' ?>
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title-post set-height-top" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
                    <div class="container">
                        <div class="page-title-post-wrapper"><!--.page-title-content--><h2 class="captions"><?php the_title(); ?></h2>
                            <?php
                            if ( have_posts() ) :
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/widget', 'breadCrumb' );
                                endwhile;
                            else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
                                get_template_part( 'template-parts/post/content', 'none' );
                            endif; ?>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses-detail">
                    <div class="container">
                        <div class="courses-detail-wrapper">
                            <div class="row">
                                    <div class="col-sm-12 col-md-9 layout-left">
                                        <div class="course">
                                        <!-- CO sa naucite  -->
                                        <?php $ulList = get_field('co_sa_naucite') ?>
                                        <?php if ($ulList) { ?>
                                        <h2>Čo sa naučíte</h2>
                                        <ul>
                                            <?php foreach ($ulList['body'] as $li) { ?>
                                                <?php foreach ($li as $item) { ?>
                                                    <li><i class="material-icons">&#xE315;</i><span><?php echo $item['c']; ?></span></li>
                                                <?php } ?>   
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                            <?php while (have_posts() ) : the_post()  ?>
                                            	<?php the_content(); ?>
    										<?php endwhile ?>
                                        <h2>Učebný plán</h2>
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
                                    <div class="col-md-3 sidebar" >
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
                                    </div> <!-- end of sidebar -->
                                    <div class="col-md-3 sidebar">
                                        <div class="row" >
                                            <?php
                                            if ( have_posts() ) :
                                                while ( have_posts() ) : the_post();
                                                    get_template_part( 'template-parts/widget', 'podobneKurzy' );
                                                endwhile;
                                            else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
                                                get_template_part( 'template-parts/post/content', 'none' );
                                            endif; ?>
                                        </div>
                                    </div> <!-- end of sidebar 2 -->
                                </div> <!-- end of row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of page wrapper -->
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
<?php get_footer(); ?>