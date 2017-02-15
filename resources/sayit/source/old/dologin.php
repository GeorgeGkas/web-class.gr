<?php
    include 'prelude.php';
    
    if ( isset( $_POST[ 'username' ] ) ) {
        $username = $_POST[ 'username' ];
        $password = $_POST[ 'password' ];
        $res = mysql_query(
            'SELECT
                userid
            FROM
                users
            WHERE
                username = "' . $username . '"
                AND password = "' . $password . '"
            LIMIT 1;'
        );
        if ( mysql_num_rows( $res ) == 1 ) {
            $user = mysql_fetch_array( $res );
            $_SESSION[ 'username' ] = $_POST[ 'username' ];
            $_SESSION[ 'userid' ] = $user[ 'userid' ];
            header( 'Location: index.php' );
        }
        else {
            header( 'Location: login.php?error=yes' );
        }
    }
    else {
        header( 'Location: login.php?error=yes' );
    }
?>