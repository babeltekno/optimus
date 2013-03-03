<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h4 class="main-header" id="GET">
        GET 
    </h4> 
    <p>
        GET method is allow you to POST a variable request form to server as ajax and return html page in element target who has defined in <code>ca-ajax-target="target-name"</code>
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-type="GET"</code>
    <h4 class="main-header">Example</h4>
    <div class="demo-btn"> 
        <form id="data-get">
            <input type="text" name="yourname" ca-validation="required"placeholder="Insert your name"> Your Name
        </form>
        <p>
            <a class="ca-btn" href="ajax/data/get.php" ca-ajax="true" ca-ajax-data="#data-get" ca-ajax-type="GET" ca-ajax-target="#get-target">Submit</a>
            <a class="ca-btn" onclick="ca_reset_form()" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#GET-target">reset</a>
        </p>
    </div>
    <div id="get-target" class="target">
        [target]
    </div> 

<pre class="prettyprint">
&lt;form id="data-get"&gt;
    &lt;input type="text" name="yourname" ca-validation="required"placeholder="Insert your name"&gt; Your Name
&lt;/form&gt;
&lt;p>
   &lt;a class="ca-btn" href="ajax/data/get.php" ca-ajax="true" ca-ajax-data="#data-get" ca-ajax-type="GET" ca-ajax-target="#get-target">Submit&lt;/a&gt;
   &lt;a class="ca-btn" onclick="ca_reset_form()" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#GET-target"&gt;reset&lt;/a&gt;
&lt;/p&gt;
</pre> 
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>

