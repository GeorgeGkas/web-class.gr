<?php
    include 'libs/user.php';

    if ( !isset( $_POST[ 'name' ] )
         || !isset( $_POST[ 'password' ] )
         || !isset( $_POST[ 'password2' ] )
         || !isset( $_POST[ 'firstname' ] )
         || !isset( $_POST[ 'lastname' ] )
         || !isset( $_POST[ 'email' ] )
         ) {
        die( 'You must fill in all details.' );
    }

    $username = $_POST[ 'name' ];
    $password = $_POST[ 'password' ];
    $password2 = $_POST[ 'password2' ];
    $firstname = $_POST[ 'firstname' ];
    $lastname = $_POST[ 'lastname' ];
    $email = $_POST[ 'email' ];

    if ( $password != $password2 ) {
        die( 'Your two passwords do not match' );
    }

    $userid = User_Create( $username, $password, $email, $firstname, $lastname );

    $_SESSION[ 'user' ] = array(
        'id' => $userid,
        'name' => $username,
        'email' => $email,
        'firstname' => $firstname,
        'lastname' => $lastname
    );

    header( 'Location: index.php' );
?>
