<?php   
    include 'header.php';

    if ( isset( $_GET[ 'p' ] ) ) {
        $page = $_GET[ 'p' ];
    }
    else {
        $page = 'home';
    }

    include "controllers/$page.php";
?>
