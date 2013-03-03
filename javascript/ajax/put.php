<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/* special ajax here */ 
?>
<h4 class="main-header" id="PUT">
     PUT 
</h4> 
<p>
    <b>PUT</b> method is allow you to put a html value in element target who has defined in <code>ca-ajax-target="target-name"</code>. The target 
    name must be define as class,id or another attribute in HTML element. The ajax target not only limit as element but you can view the result as <b>lightbox</b>.
    Learn more about <code>ca-ajax-target</code>
</p>
<h4 class="main-header">Syntax</h4>
<code>ca-ajax-type="PUT"</code>
<h4 class="main-header">Example</h4>
<p> 
    <a class="ca-btn" href="ajax/data/put.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#put-target">PUT a html page</a>
    <a class="ca-btn" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#put-target">reset</a>
</p>
<div id="put-target" class="target">
[target]
</div> 

<pre class="prettyprint">
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#target"&gt;PUT a html page&lt;/a&gt;
</pre> 
<?php
}else{
   header('Location: /docs/javascript/404.php');
}
?>
