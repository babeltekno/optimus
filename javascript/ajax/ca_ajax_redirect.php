<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">
        ca-ajax-redirect
    </h3> 
    <p>
        <b>ca-ajax-redirect</b> is the attribute name whether it's contained the page url want to redirect after ajax request.
        Implementation in code is <b>ca-ajax-redirect="url_redirect"</b>
        This attribute just run if you define the ca-ajax-type="POST|GET", see how it's work
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-redirect="url_redirect"</code>
    <h4 class="main-header">Example</h4>
    <div class="demo-btn"> 
        <form name="ca-form-redirect">
            <input type="text" name="yourname" ca-validation="required"> Input your name
        </form>
        <p>
            <a class="ca-btn" href="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-redirect="ajax/data/redirect.php" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="#ca_right">send</a>
        </p>
    </div> 
<pre class="prettyprint">
&lt;form name="ca-form-redirect"&gt;
   &lt;input type="text" name="yourname" ca-validation="required" &gt; Input your name
&lt;/form>
&lt;p&gt;
   &lt;a class="ca-btn" href="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-redirect="ajax/data/redirect.php" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="#ca_right"&gt;send&lt;/a&gt;
&lt;/p&gt;
</pre> 

    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>