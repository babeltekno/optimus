<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <div id="content-ajax"> 
        <div id="ca_ajax"> 
            <?php
            include 'ca_ajax.php';
            ?>
        </div>
        <div id="ca_ajax_data">
            <?php
            include 'ca_ajax_data.php';
            ?>
        </div>
        <div id="ca_ajax_redirect">
            <?php
            include 'ca_ajax_redirect.php';
            ?>
        </div>
        <div id="ca_ajax_target">
            <?php
            include 'ca_ajax_target.php';
            ?>
        </div>
        <div id="ca_ajax_type">
            <?php
            include 'ca_ajax_type.php';
            ?>
        </div>
        <div id="ca_ajax_url">
            <?php
            include 'ca_ajax_url.php';
            ?> 
        </div>
    </div>
        <?php
    } else {
        header('Location: /docs/javascript/404.php');
    }
    ?>