<?php
    if ( !isset( $_GET[ 'id' ] ) ) {
        die( 'No photo id specified' );
    }

    $id = $_GET[ 'id' ];
    $id = ( int )$id;

    if ( file_exists( 'photos/' . $id ) ) {
        header( 'Content-type: image/jpg' );
        echo file_get_contents( 'photos/' . $id );
    }
    else {
        die( 'Invalid photo id' );
    }
?>
