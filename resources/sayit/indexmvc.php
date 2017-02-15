<?php
    header( 'Content-type: text/html; charset=utf8' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title>Πες το!</title>
        <link type="text/css" rel="stylesheet" href="code.css" />
    </head>
    <body>
        <h1>Πες το!</h1>
        
        <p>Μία web εφαρμογή με ένα απλό σύστημα χρηστών που επιτρέπει σε όλους να μοιράζονται μηνύματα με όλους.</p>
        
        <p>Αυτή τη φορά <strong>χρησιμοποιήσαμε την δομή MVC</strong>.
            <a href="index.php">Εναλλακτικά χωρίς ορθή δομή MVC</a>
        </p>
        
        <p>Εξερεύνησε τον κώδικα:</p>
        <ul>
            <?php
                function ls( $path ) {
                    $dir = opendir( 'source/' . $path );
                    if ( $path != '' ) {
                        $disp = $path . '/';
                    }
                    else {
                        $disp = '';
                    }
                    while ( $file = readdir( $dir ) ) {
                        switch ( strtolower( substr( $file, -4 ) ) ) {
                            case '.css':
                            case '.php':
                                ?><li><a href="showsourcemvc.php?file=<?= $disp . $file ?>"><?= $disp . $file ?></a></li><?php
                        }
                    }
                }
                
                ls( '' );
                ls( 'models' );
                ls( 'views' );
            ?>
        </ul>
        <p><a href="schema.txt">Το σχήμα της βάσης δεδομένων</a></p>
        <p>
            Μπορείς να αντιγράψεις, να αλλάξεις, και να χρησιμοποιήσεις αυτόν τον κώδικα ελεύθερα, σύμφωνα με <a href="http://www.opensource.org/licenses/bsd-license.php">την άδεια χρήσης BSD</a>.
        </p>
    </body>
</html>
