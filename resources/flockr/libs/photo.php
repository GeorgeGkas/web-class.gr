<?php
    function Photo_Create( $title, $tmpfile, $userid ) {
        db(
            'INSERT INTO photos SET
                title = ?,
                userid = ?,
                created = NOW()', array( $tmpfile, $userid )
        );
          
        $id = mysql_insert_id();
        if ( move_uploaded_file( $tmpfile, 'photos/' . $id ) === false ) {
            die( 'Failed to upload file for some reason' );
        }

        return $id;
    }
    
    function Photo_ListingByUser( $userid ) {
    }
    
    function Photo_Stream( $userid, $friends = true ) {
        if ( $friends ) {
            return db_array(
                'SELECT
                     photos.id AS photoid,
                     users.name AS username,
                     photos.title
                 FROM
                     photos CROSS JOIN users
                        ON photos.userid = users.id
                     CROSS JOIN friendships
                        ON users.id = friendships.following
                 WHERE
                     follower = ?
                 LIMIT 100', array( $userid )
            );
        }
        return db_array(
            'SELECT
                photos.id AS photoid,
                users.name AS username,
                photos.title
             FROM
                photos CROSS JOIN users
                    ON photos.userid = users.id
             LIMIT 100'
        );
    }
    
    function Photo_Get( $photoid ) {
    }
    
    function Photo_Delete( $photoid ) {
    }
    
    function Photo_Update( $photoid, $title ) {
    }
?>
