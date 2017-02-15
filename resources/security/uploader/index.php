<html>
    <head>
        <title>File Uploader</title>
    </head>
    <body>
        <h1>File Uploader</h1>
        <h2>Uploaded files</h2>
        <ul>
        <?php
            $dir = opendir( 'uploads' );
            while ( ( $file = readdir( $dir ) ) !== false ) {
                switch ( $file ) {
                    case '.':
                    case '..':
                        break;
                    default:
                        ?><li><a href="uploads/<?php
                        echo $file;
                        ?>"><?php
                        echo $file;
                        ?></a></li><?php
                }
            }
        ?>
        </ul>
        <h2>Upload a file</h2>
        <form action="doupload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" value="Upload file" />
        </form>
    </body>
</html>
