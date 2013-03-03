<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/* special ajax here */ 
?>
<h3 class="main-header">
   ca-ajax-type
</h3> 
<p>
    The attr "ca-ajax-type" has three value, where as default is <b>PUT</b>. The different of the third value is type of request.
    <code>ca-ajax-type="PUT"</code>,
    <code>ca-ajax-type="GET"</code>, 
    <code>ca-ajax-type="POST"</code>  
    every attribute is use in different case, See how it's used.
</p> 
<!--include PUT documentation-->
<?php
include 'put.php';
?> 
<!--include POST documentation-->
<?php
include 'get.php';
?>  
<!--include POST documentation-->
<?php
include 'post.php';
}else{
   header('Location: /docs/javascript/404.php');
}
?>  