<?php
    include 'prelude.php';
    
    if ( isset( $_POST[ 'username' ] ) && isset( $_POST[ 'password' ] ) ) {
		$username = $_POST[ 'username' ];
		$password = $_POST[ 'password' ];
        // check if username exists
        $res = mysql_query(
            'SELECT
                username
            FROM
                users
            WHERE
                username = "' . $username . '";'
        );
        if ( mysql_num_rows( $res ) == 0 ) {
            mysql_query(
                'INSERT INTO
                    users
                SET
                    username = "' . $username . '",
                    password = "' . $password . '";'
            );
            
            $_SESSION[ 'username' ] = $username;
            $_SESSION[ 'userid' ] = mysql_insert_id();
            header( 'Location: index.php' );
        }
        else {
            header( 'Location: register.php?exists=yes' );
        }
    }
    else {
        header( 'Location: register.php?missing=yes' );
    }
?>
