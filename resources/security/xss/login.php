<?php
    include 'header.php';
?>
    <form action="dologin.php" method="post" class="login">
        <?php
            if ( isset( $_GET[ 'error' ] ) && $_GET[ 'error' ] == 'yes' ) {
                ?><div class="error">Λάθος όνομα ή κωδικός πρόσβασης!</div><?php
            }
        ?>
        <div>
            <label>Username:</label> <input type="text" name="username" />
        </div>
        <div>
            <label>Password:</label> <input type="password" name="password" />
        </div>
        <input type="submit" value="Login" class="submit" />
    </form>
<?php
    include 'footer.php';
?>