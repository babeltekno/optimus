<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/* special ajax here */ 
?>
<h3 class="main-header">
   ca-ajax-url
</h3> 
<p>
    <b>ca-ajax-url</b> is the url address for ajax request. This is optional, you can use ca-ajax-url as href in &lt;a&gt; HTML element
</p>
<h5 class="main-header">Syntax</h5>
<code>ca-ajax-url="your_url"</code>
<h5 class="main-header">Example</h5>
<div class="demo-btn"> 
    <a class="ca-btn" href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#url-target">href</a> OR 
    <a class="ca-btn" ca-ajax-url="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#url-target">ca-ajax-url</a>
    <a class="btn btn-inverse" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#url-target">reset</a>
</div>
<div id="url-target" class="target">
[target]
</div> 

<pre class="prettyprint">
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#url-target"&gt;href&lt;/a&gt;
&lt;a ca-ajax-url="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#url-target"&gt;ca-ajax-url&lt;/a&gt;
</pre> 
<?php
}else{
   header('Location: /docs/javascript/404.php');
}
?>