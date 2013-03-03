<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>  
    <p>
        <br/><br/>
        <span class="alert span12">
            data was sended. Now you are redirected <a class="btn btn-primary" onclick="javascript:history.back(-1)" ca-ajax-target="#ca_right">back</a>
        </span>
    </p> 
    <?php
}
?>