<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title>Πες το</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="universe">
            <?php
            if ( isset( $username ) ) {
                ?><a href="logout.php" class="menu">Αποσύνδεση</a><?php
            }
            ?>
            <h1><a href="index.php">Πες το</a><?php
            if ( isset( $username ) ) {
                ?>, <?php
                echo $username;
            }
            ?></h1>
            <div class="content">