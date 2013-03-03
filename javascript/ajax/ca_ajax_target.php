<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/* special ajax here */ 
?>
<h3 class="main-header">
   ca-ajax-target
</h3> 
<p>
    <b>ca-ajax-target</b> is the place where you put or view the ajax result. You can define the target as id,class or another attribute name of HTML element. But
    the result is able to view as modalbox with <code>ca-ajax-target="ca-modalbox"</code>
    
</p>
<h4 class="main-header">Syntax</h4>
<code>ca-ajax-target="your_target"</code>
<h4 class="main-header">Example</h4>
<div class="demo-btn"> 
    <span class="ca-btn" href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#id-target">id</span> OR 
    <span class="ca-btn" ca-ajax-url="ajax/data/put.php" ca-ajax="true" ca-ajax-target=".class-target">class</span> OR
    <span class="ca-btn" href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="div[name='my-target']">other</span> OR
    <span class="ca-btn" href="ajax/data/modal.php" ca-ajax="true" ca-ajax-target="ca-modalbox">modalbox</span>
    <span class="btn btn-inverse" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#id-target">reset</span>
</div>
<div id="id-target" class="target class-target" name="my-target">
[target]
</div> 

<pre class="prettyprint">
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#id-target"&gt;id&lt;/a&gt;
&lt;a ca-ajax-url="ajax/data/put.php" ca-ajax="true" ca-ajax-target=".class-target"&gt;class&lt;/a&gt;
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="div[name='my-target']"&gt;other&lt;/a&gt;
&lt;a href="ajax/data/modal.php" ca-ajax="true" ca-ajax-target="ca-modalbox"  ca-modal-fix="true"&gt;modalbox&lt;/a&gt;
</pre> 
<?php
}else{
   header('Location: /docs/javascript/404.php');
}
?>