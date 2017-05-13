<?php 
/**
* Sablona pre prihlasku na kurz
* v 1.01
**/
?>
<!-- Modal -->
<div class="modal fade" id="prihlaska" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="modal-close-btn" aria-hidden="true">&times;</span></button>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p><strong>Prihláška na kurz <?php the_title() ?></strong><br>(Prihlásenie na kurz je nezáväzné)</p>
            </div>
        </div>
        </div>
        <div class="modal-body">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
        </div>
    </div>
  </div>
</div>