<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <div class="ca-modal-header">
        <button type="button" class="close" onclick="ca_close_box()" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2>Modal header</h2>
    </div>
    <div class="ca-modal-body">

        <p>
        <h3>Modal Example</h3>
            press key <b>ESC</b> for close the lightbox</p>
    </div> 
    <?php
}
?>