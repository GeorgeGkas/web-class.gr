<?php
    include 'header.php';
?>
    <form action="doregister.php" method="post">
        <p>
            Συμπλήρωσε τα στοιχεία του νέου λογαριασμού σου:
        </p>
        <?php
            if ( isset( $_GET[ 'missing' ] ) ) {
                ?><div class="error">Ορισμένα από τα στοιχεία λείπουν.</div><?php
            }
            else if ( isset( $_GET[ 'exists' ] ) ) {
                ?><div class="error">Το όνομα χρήστη υπάρχει ήδη.</div><?php
            }
        ?>
        <div>
            <label>Username:</label>
            <input type="text" name="username" />
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" />
        </div>
        <input type="submit" class="submit" />
    </form>
<?php
    include 'footer.php';
?>
