<?php
	session_start();
	header( 'Content-Type: text/html; charset=utf-8' );
	include 'models/database.php';
	include 'models/posts.php';
	
	$posts = GetPosts();
	if ( isset( $_SESSION[ 'userid' ] ) ) {
		$username = $_SESSION[ 'username' ];
	}	
	
	include 'views/home.php';
?>