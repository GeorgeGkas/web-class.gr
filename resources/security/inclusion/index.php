<?php
    include 'database.inc';
    
    $res = mysql_query(
        "SELECT
            title, story
        FROM
            news
        LIMIT 1;"
    );
    
    $row = mysql_fetch( $res );
    
    ?><h1><?php
    echo $row[ 'title' ];
    ?></h1>
    
    <p><?php
    echo $row[ 'story' ];
    ?></p>
