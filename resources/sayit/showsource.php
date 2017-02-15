<?php
    header( 'Content-type: text/html; charset=utf8' );
    if ( !isset( $_GET[ 'file' ] ) ) {
        die();
    }
    $file = htmlspecialchars( basename( $_GET[ 'file' ] ) );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title><?= $file ?> - Πηγαίος κώδικας</title>
        <link type="text/css" rel="stylesheet" href="code.css" />
    </head>
    <body>
        <p><a href="index.php">Πίσω στη λίστα αρχείων</a></p>
        <h1><?= $file ?></h1>
        <?php
            highlight_file( 'source/old/' . $file );
        ?>
    </body>
</html>