<?php
    unset( $_SESSION[ 'user' ] );
    header( 'Location: index.php?p=home' );
?>
