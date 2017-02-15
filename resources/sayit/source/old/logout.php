<?php
    include 'prelude.php';
    
    unset( $_SESSION[ 'username' ] ) ;
    header( 'Location: index.php' );
?>