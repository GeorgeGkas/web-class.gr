<?php
	session_start();
	
    include 'models/users.php';
	include 'models/database.php';
    
    if ( !isset( $_POST[ 'username' ] ) || !isset( $_POST[ 'password' ] ) ) {
        die();
    }
    
    $userid = AuthenticateUser( $_POST[ 'username' ], $_POST[ 'password' ] );
    if ( $userid !== false ) {
        $_SESSION[ 'userid' ] = $userid;
        $_SESSION[ 'username' ] = $_POST[ 'username' ];
		header( 'Location: index.php' );
    }
	else {
		header( 'Location: login.php?error=yes' );
	}
?>
