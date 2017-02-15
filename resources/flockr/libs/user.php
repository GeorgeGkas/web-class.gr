<?php
    function User_Authorize( $name, $password ) {
        $res =
            db( 'SELECT
                    id, name
                FROM
                    users
                WHERE
                    name = ?
                    AND password = MD5( ? )
                LIMIT 1', array( $name, $password )
            );

        if ( mysql_num_rows( $res ) ) {
            $row = mysql_fetch_array( $res );
            return $row;
        }
        return false;
    }
    
    function User_Create( $username, $password, $email, $firstname, $lastname ) {
        db( 'INSERT INTO users SET
                 name = ?,
                 password = MD5( ? ),
                 email = ?,
                 firstname = ?,
                 lastname = ?',
            array( $username, $password, $email, $firstname, $lastname )
        );
        return mysql_insert_id();
    }
    
    function User_Update( $userid, $email, $firstname, $lastname ) {
        db( 'UPDATE users SET
                 email = ?,
                 firstname = ?,
                 lastname = ?
             WHERE 
                 id = ?',
             array( $email, $firstname, $lastname, $userid )
        );
        return true;
    }
?>

