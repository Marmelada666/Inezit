<?php 
$cenaKurzu = get_field('cena_kurzu',get_the_id());
 ?>
<div class="course-price-widget col-sm-6 col-md-12 col-sm-offset-3 col-md-offset-0">
<div class="title-widget"><p><?php echo $cenaKurzu; ?></div>
<div class="content-widget">
    <div class="course-price-widget-wrapper">
        <div class="row">
            <div class="col-md-12 info-row col-sm-12 col-xs-12">
                <div class="pull-left title">Dĺžka kurzu:</div>
                <div class="pull-right level"><?php the_field('dlzka_kurzu',get_the_id()) ?> h</div>
            </div>
            <div class="col-md-12 info-row col-sm-12 col-xs-12">
                <div class="pull-left title">Termín:</div>
                <div class="pull-right level"><?php the_field('termin',get_the_id()) ?></div>
            </div>
            <div class="col-md-12 info-row col-sm-12 col-xs-12">
                <div class="pull-left title">Úroveň:</div>
                <div class="pull-right level"><?php the_field('uroven',get_the_id()) ?></div>
            </div>
            <!-- <div class="col-md-12 info-row col-sm-12 col-xs-12">
                <div class="pull-left title">Hodnotenie:</div>
                <div title="Rated 5.00 out of 5" class="pull-right star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
            </div> -->
        </div>
        <button class="btn btn-green" data-toggle="modal" data-target="#prihlaska"><span>Prihlasit</span></button>
    </div>
</div>
</div>