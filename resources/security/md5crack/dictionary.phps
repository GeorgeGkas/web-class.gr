<?php
    define( 'CRACK' , '098f6bcd4621d373cade4e832627b4f6' );
    define( 'DICT' , 'English.txt' );
    
    $lines = explode( "\r\n", file_get_contents( DICT ) );
    
    foreach ( $lines as $line ) {
        if ( md5( $line ) == CRACK ) {
            echo 'Password: ' . $line . "\n";
            exit();
        }
    }
?>