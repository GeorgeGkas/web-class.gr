<?php
    header( 'Content-type: text/html; charset=utf8' );
    if ( !isset( $_GET[ 'file' ] ) ) {
        die();
    }
    $basename = basename( $_GET[ 'file' ] );
    
    $slashpos = strpos( $_GET[ 'file' ], '/' );
    
    if ( $slashpos === false ) {
        $folder = '';
    }
    else {
        switch ( strtolower( substr( $_GET[ 'file' ], 0, $slashpos ) ) ) {
            case 'models':
                $folder = 'models/';
                break;
            case 'views':
                $folder = 'views/';
                break;
        }
    }
    
    $basename = htmlspecialchars( $basename );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title><?= $folder . $basename ?> - Πηγαίος κώδικας</title>
        <link type="text/css" rel="stylesheet" href="code.css" />
    </head>
    <body>
        <p><a href="indexmvc.php">Πίσω στη λίστα αρχείων</a></p>
        <h1><?= $folder . $basename ?></h1>
        <?php
            highlight_file( 'source/' . $folder . $basename );
        ?>
    </body>
</html>