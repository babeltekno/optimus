<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/* special ajax here */  
?><p>Hello <b><?php echo $_GET['yourname'] ?></b>!! </p>
<?php
}
?>