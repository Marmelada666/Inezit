<div class="popular-course-widget widget col-sm-6 col-sm-12">
    <div class="title-widget">Podobne kurzy</div>
    <div class="content-widget">
        <?php $b = array(121,14,72,79) ?>
        <?php $i = 0 ?>
        <?php do { ?>
            <div class="media">
                <a href="<?php the_permalink($b[$i]) ?>"><div class="media-left" style="background-image: url(<?php the_field('ikonka_kurzu',$b[$i]) ?>);"></div></a>
                <div class="media-right">
                    <div class="cur"><?php the_field('cena_kurzu',$b[$i]) ?></div>
                    <a href="<?php the_permalink($b[$i]) ?>" class="link-title"><?php echo get_the_title($b[$i]) ?></a><br>

                    <div class="info">
                        <div class="author item"><a href="#"><span><?php the_field('dlzka_kurzu',$b[$i]) ?> hodín</span></a></div>
                    </div>
                </div>
            </div>
        <?php $i++ ?>
        <?php } while ( $i <= 3) ?>
        <!--end of item-->
        
    </div>
</div>