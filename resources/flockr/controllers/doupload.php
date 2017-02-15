<?php
    $loggedin = isset( $_SESSION[ 'user' ] );

    if ( !$loggedin ) {
        die( 'Must login to upload photo.' );
    }
    if ( !isset( $_FILES[ 'photo' ] ) ) {
        die( 'You did not specify a file to upload.' );
    }

    include 'libs/photo.php';

    Photo_Create( $_FILES[ 'photo' ][ 'name' ], $_FILES[ 'photo' ][ 'tmp_name' ], $_SESSION[ 'user' ][ 'id' ] );

    header( 'Location: index.php?p=home' );
?>
