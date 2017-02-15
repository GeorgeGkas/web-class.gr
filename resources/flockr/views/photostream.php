<?php
    if ( empty( $photos ) ) {
        ?><p>No photos found. Upload one!</p><?php
    }
    else {
        ?><ul><?php
        foreach ( $photos as $photo ) {
            ?><li><?php
            echo $photo[ 'username' ];
            ?> uploaded a photo: <img src="index.php?p=getphoto&amp;id=<?php
            echo $photo[ 'photoid' ];
            ?>" alt="<?php
            echo $photo[ 'username' ];
            ?>" width="200" /></li><?php
        }
        ?></ul><?php
    }
?>
