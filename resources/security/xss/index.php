<?php
    include 'header.php';

    if ( isset( $_SESSION[ 'username' ] ) ) {
        ?>
        <h2>Γράψε κάτι</h2>
        <form action="send.php" method="post">
            <div class="text">
                <textarea name="shout"></textarea>
            </div>
            <input type="submit" value="Πες το!" class='submit' />
        </form>
        <?php
    }
    else {
        ?>
        <p>
            Για να γράψεις κάτι, θα πρέπει <a href="login.php">να κάνεις login</a>.
        </p>
        <p>
            Αν δεν έχεις λογαριασμό, <a href="register.php">δημιούργησε έναν</a>.
        </p>
        <?php
    }
?>
<h2>Τι είπαν οι άλλοι</h2>
<ol><?php
    $res = mysql_query(
        "SELECT
            username, text
        FROM
            shouts CROSS JOIN users
                ON shouts.userid = users.userid
        ORDER BY
            created DESC;"
    );
    while ( $row = mysql_fetch_array( $res ) ) {
        ?>
        <li>
            <strong><?php
            echo $row[ 'username' ];
            ?>:</strong> <span><?php
            echo $row[ 'text' ];
            ?></span>
        </li>
        <?php
    }
    ?>
</ol>
<?php
    include 'footer.php';
?>
