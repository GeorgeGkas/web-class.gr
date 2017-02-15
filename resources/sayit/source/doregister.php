<?php
	include 'models/user.php';
	session_start();
	if( isset( $_POST[ 'username' ] ) &&
		isset( $_POST[ 'password' ] ) ){
		
		$userid = CreateUser( $_POST[ 'username' ], $_POST[ 'password' ] );
		if( $userid ) {
			$_SESSION[ 'username' ] = $_POST[ 'username' ];
			$_SESSION[ 'userid' ] = $userid;
		}
		header( 'Location: index.php' );
	}
?>