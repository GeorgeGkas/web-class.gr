<?php
    function db( $code, $data = false ) { 
        if ( $data === false ) {
            $data = array();
        }
        $parts = explode( "?", $code ); 
        $sql = ""; 
        foreach ( $data as $value ) { 
            $sql .= array_shift( $parts ); 
            $sql .= "\"" .addslashes($value). "\""; 
        }
        $sql .= array_shift( $parts ); 
        $res = mysql_query( $sql );
        if ( $res === false ) {
            die( 'MySQL error: ' . mysql_error() );
        }
        return $res;
    }

    function db_array( $code, $data = false ) {
        $res = db( $code, $data );

        $rows = array();
        while ( $row = mysql_fetch_array( $res ) ) {
            $rows[] = $row;
        }

        return $rows;
    }

    mysql_connect( 'localhost', 'root', 'ha4gt6' ) or die( 'Could not connect to MySQL: ' . mysql_error() );
    mysql_select_db( 'flockr' ) or die( 'Could not select MySQL DB: ' . mysql_error() );
    mysql_query( 'SET NAMES UTF-8' );
?>
