<?php
	include 'header.php';
	
	if( isset( $username ) ) {
		include 'postform.php';
	}
	else {
		?><p>Πρέπει να έχεις κάνει <a href="login.php">είσοδο</a> για να γράψεις.</p><?php
	}
	
	include 'postlist.php';
	include 'footer.php';
?>
