<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">
        Ajax
    </h3> 
    <p>
        What are you looking for in website development?, Is it easy development?... Yes it was, maybe until 90% peoples on website development is looking for it.
        Whether it's easy understanding from syntax and many thing else. So here we are CodeAnalytic TEAM provide a simple javascript framework in every technology build codeanalytic CMS.
        In this document we are in javascript, So here we will focus in javascript build codeanalytic. 
    </p>
    <p>
        I'll remember that codeanalytic is use much javascript framework especially jQuery and we are combine to be simple framework for support codeanalytic development 
        with fast and easy.
    </p>
    <p>
        <b>FAST</b>, is the main thing, that we provide in codeanalytic CMS. There are many way to optimize your website to be fast, where one of them is ajax optimize.
        We are provide a simple javascript API to developer, and we named <code>ajax-optimus</code>, where
        ajax-optimus is allow you to add ajax request in every element has defined the attribute <code>ca-ajax="true"</code> with easy and simple.
        In this case, ajax-optimus is provide three method witch rich and return value with different method. They are 
        <code>ca-ajax-type="PUT"</code>,
        <code>ca-ajax-type="GET"</code>, 
        <code>ca-ajax-type="POST"</code>    
    </p> 
    <h4 class="main-header">Attribute</h4>
    <table class="ca-table ca-table-border" cellspacing="0" cellpadding="0">
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Default</th>
            <th>Description</th>
        </tr>
        <tr class="zebra">
            <td>ca-ajax</td>
            <td>String</td>
            <td>none</td>
            <td>Initialize the element as ajax request when element on Click</td>
        </tr>
        <tr>
            <td>ca-ajax-data</td>
            <td>Selector</td>
            <td>none</td>
            <td>Get data serialize from element <code>&lt;form&gt;</code> base of selector syntax</td>
        </tr>
        <tr class="zebra">
            <td>ca-ajax-redirect</td>
            <td>String</td>
            <td>none</td>
            <td>The redirect url after the first ajax process is success</td>
        </tr>
        <tr>
            <td>ca-ajax-target</td>
            <td>Selector</td>
            <td>none</td>
            <td>The element selector for put the result of ajax request. HTML value from ajax request will be replace to element was defined in selector</td>
        </tr>
        <tr class="zebra">
            <td>ca-ajax-type</td>
            <td>String</td>
            <td>PUT</td>
            <td>The type of mothod ajax request. There are three method <code>PUT,POST,GET</code></td>
        </tr>
        <tr>
            <td>ca-ajax-url</td>
            <td>Stringr</td>
            <td>none</td>
            <td>The url address to sent request as ajax</td>
        </tr>
    </table>
    <p>
        Learn more about ajax-optimus attribute:
    </p>
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>