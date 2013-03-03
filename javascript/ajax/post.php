<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h4 class="main-header" id="POST">
        POST  
    </h4> 
    <p>
        POST method is allow you to post a variable request form to server as ajax and return html page in element target who has defined in <code>ca-ajax-target="target-name"</code>
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-type="POST"</code>
    <h4 class="main-header">Example</h4>
    <div class="demo-btn"> 
        <form id="data-post">
            <input type="text" name="yourname" ca-tip-icon="icon-warning-sign" placeholder="Insert your name" ca-validation="required"> Your Name
        </form>
        <p>
            <a class="ca-btn ca-tip-bottom"  ca-original-title="HotKeys(ALT+S)" accesskey="S" href="ajax/data/post.php" ca-ajax="true" ca-ajax-data="#data-post" ca-ajax-type="POST" ca-ajax-target="#post-target">Submit</a>
            <a class="ca-btn ca-tip-top"  ca-original-title="HotKeys(ALT+X)" accesskey="X" onclick="ca_reset_form()" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#post-target">reset</a>
        </p>
    </div>
    <div id="post-target" class="target">
        [target]
    </div> 

<pre class="prettyprint">
&lt;form id="data-post"&gt;
   &lt;input type="text" name="yourname" ca-tip-icon="icon-warning-sign" placeholder="Insert your name" ca-validation="required"&gt; Your Name
&lt;/form&gt;
&lt;p&gt;
   &lt;a class="ca-btn ca-tip-bottom"  ca-original-title="HotKeys(ALT+S)" accesskey="S" href="ajax/data/post.php" ca-ajax="true" ca-ajax-data="#data-post" ca-ajax-type="POST" ca-ajax-target="#post-target">Submit&lt;/a&gt;
   &lt;a class="ca-btn ca-tip-top"  ca-original-title="HotKeys(ALT+X)" accesskey="X" onclick="ca_reset_form()" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#post-target"&gt;reset&lt;/a&gt;
&lt;/p&gt;
</pre> 
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>