<?php
    $file = $_GET[ 'file' ];
    
    header( 'Content-type: text/plain' );
    echo file_get_contents( 'C:/uploads/' . $file );
?>
