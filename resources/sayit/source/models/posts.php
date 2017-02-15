<?php
	function SavePost( $userid, $text ){
		mysql_query( 
			"INSERT INTO
				posts
			SET
				text = '$text',
				userid = $userid,
				created = NOW();"
        );
		return mysql_affected_rows() == 1;
	}
	
	function GetPosts() {
        $res = mysql_query(
            "SELECT
                text, username, created
            FROM
                posts, users
			WHERE
				posts.userid = users.userid
            ORDER BY
                created DESC;"
        );
        
        $rows = array();
        while ( $row = mysql_fetch_array( $res ) ) {
            $rows[] = $row;
        }
        
        return $rows;
	}
?>
