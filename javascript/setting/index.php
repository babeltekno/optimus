<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">Setting</h3>
    <p>
        CodeAnalytic ajax is need simple requirement. You have to define the attribute which listed in the table
    </p> 
    <table class="ca-table ca-table-border" cellspacing="0" cellpadding="0">
        <tr>
            <th>Name</th> 
            <th>Description</th>
        </tr>
        <tr class="zebra">
            <td>ca_base_</td> 
            <td>The base url of your website</td>
        </tr>
        <tr>
            <td>ca_animate_</td> 
            <td>The animation name used in your application</td>
        </tr>
        <tr class="zebra">
            <td>ca_wrapper</td> 
            <td>The main destination, where ca-ajax need selector name of element defined as target</td>
        </tr>
        <tr>
            <td>ca_loading_</td> 
            <td>Loading text or image</td>
        </tr> 
    </table>
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>