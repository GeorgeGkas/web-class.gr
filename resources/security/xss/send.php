<?php
	include 'prelude.php';

    if ( isset( $_SESSION[ 'username' ] ) && isset( $_POST[ 'shout' ] ) ) {
        $shout = $_POST[ 'shout' ];
        mysql_query(
            "INSERT INTO
                posts
            SET
                text = '" . $shout . "',
                userid = " . $_SESSION[ 'userid' ] . ",
                created = NOW();"
        );
		header( 'Location: index.php' );
    }
    else {
        ?>Πρέπει να έχεις κάνει είσοδο για να το κάνεις αυτό.<?php
    }
?>