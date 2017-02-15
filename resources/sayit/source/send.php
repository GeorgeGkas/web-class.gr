<?php
	include 'models/posts.php';
	include 'models/database.php';
	session_start();
    
    if ( !isset( $_SESSION[ 'userid' ] ) ) {
		header( 'Location: login.php' );
        die();
    }
    
	if ( isset( $_POST[ 'shout' ] ) ) {
        SavePost( $_SESSION[ 'userid' ], $_POST[ 'shout' ] );
		header( 'Location: index.php' );
	}
?>