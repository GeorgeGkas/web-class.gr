<?php
    if ( isset( $_FILES[ 'file' ] ) ) {
        move_uploaded_file( $_FILES[ 'file' ][ 'tmp_name' ], 'C:/uploads/' . $_FILES[ 'file' ][ 'name' ] );
    }
    header( 'Location: index.php' );
?>
