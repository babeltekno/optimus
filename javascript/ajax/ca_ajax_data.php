<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">
        ca-ajax-data
    </h3> 
    <p>
        <b>ca-ajax-data</b> is the attribute name whether it's id,class,name of &lt;form&gt;. Implementation in code is <b>ca-ajax-data="form[attr_name='value_name']"</b>
        This attribute just run if you define the <code>ca-ajax-type="POST|GET"</code>, see how it's work
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-data="form[attr_name='value_name']"</code>
    <h4 class="main-header">Example</h4>
    <div class="demo-btn"> 
        <form name="ca-form-user">
            <input type="text" name="yourname" ca-validation="required"> Input your name
        </form>
        <p>
            <a class="ca-btn" href="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="ca-modalbox">send</a>
        </p>
    </div> 
<pre class="prettyprint">
&lt;form name="ca-form-user"&gt;
   &lt;input type="text" name="yourname"&gt; Input your name
&lt;/form>
&lt;p&gt;
   &lt;a class="ca-btn" href="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="ca-modalbox"&gt;send&lt;/a&gt;
&lt;/p&gt;
</pre> 
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>