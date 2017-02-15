<?php
    include 'views/header.php';
    $loggedin = isset( $_SESSION[ 'user' ][ 'id' ] );
    if ( $loggedin ) {
        include 'libs/photo.php';
        $friendphotos = Photo_Stream( $_SESSION[ 'user' ][ 'id' ] );
        $allphotos = Photo_Stream( $_SESSION[ 'user' ][ 'id' ], false );
        include 'views/home.php';
    }
    else {
        include 'views/login.php';
    }
    include 'views/footer.php';
?>
