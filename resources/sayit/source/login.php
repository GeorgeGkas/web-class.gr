<?php
	if ( isset( $_GET[ 'error' ] ) && $_GET[ 'error' ] == 'yes' ) {
		$error = true;
	}
    include 'views/login.php';
?>
