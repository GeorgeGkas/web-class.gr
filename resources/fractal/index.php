<?php
    header( 'Content-type: text/html; charset=utf-8' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el">
    <head>
        <title>Mandelbrot</title>
    </head>
    <body>
        <h1>Mandelbrot Fractal</h1>
        <p>
            Η φόρτωση μπορεί να πάρει μερικά λεπτά.<br />
            Μειώνοντας κανείς το <code>RESOLUTION_X</code> μπορεί να πάρει καλύτερη ποιότητα εικόνας,
            με μεγαλύτερο χρόνο δημιουργίας.
            <a href="fractal-source.php">Πηγαίος κώδικας</a>
        </p>
        <p>
            <img src="fractal.php" alt="Mandelbrot" />
        </p>
    </body>
</html>
