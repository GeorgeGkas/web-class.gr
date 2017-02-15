<?php
	function CreateUser( $username, $password ){
		// Returns true on success, false on failure
        $success = mysql_query(
            "INSERT INTO
                users
            SET
                username = '$username',
                password = '$password'"
        );
        return $success;
	}
	
	function AuthenticateUser( $username, $password ){
		// Returns userid on success, false on failure
        $res = mysql_query(
            "SELECT
                userid
            FROM
                users
            WHERE
                username = '$username'
                AND password = '$password'
            LIMIT 1;"
        );
        
        if ( mysql_num_rows( $res ) == 1 ) {
            $user = mysql_fetch_array( $res );
            return $user[ 'userid' ];
        }
        
        return false;
	}
	
	function UserExists( $username ) {
        // returns true if user exists, false if else
        $res = mysql_query(
            "SELECT
                userid
            FROM
                users
            WHERE
                username = '$username'
            LIMIT 1;"
        );
        
        $exists = ( mysql_num_rows( $res ) == 1 );
        
        return $exists;
	}
?>
