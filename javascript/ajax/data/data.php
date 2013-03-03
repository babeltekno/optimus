<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/* special ajax here */  
?>
<p>Hello <b><?php echo $_POST['yourname'] ?></b>!! <br/>
 press key <b>ESC</b> for close the lightbox</p>
<?php
}
?>