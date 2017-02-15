<?php
    include 'views/userinfo.php';

    // show friends' photostream
    ?><h2>Recent friends photos</h2><?php
    $photos = $friendphotos;
    include 'views/photostream.php';

    ?><h2>Recent photos by everyone</h2><?php
    $photos = $allphotos;
    include 'views/photostream.php';
    // show submit form
    include 'views/submit.php';
?>
