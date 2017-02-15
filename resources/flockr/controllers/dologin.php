<?php
    if ( empty( $_POST[ 'name' ] ) || empty( $_POST[ 'password' ] ) ) {
        die( 'Please specify a uesrname and a password.' );
    }

    include 'libs/user.php';

    $user = User_Authorize( $_POST[ 'name' ], $_POST[ 'password' ] );

    if ( $user === false ) {
        die( 'Invalid username and/or password.' );
    }
    else {
        $_SESSION[ 'user' ] = $user;
        header( 'Location: index.php?p=home' );
    }
?>
