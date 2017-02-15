<?php
    include 'header.php';
?>
    <form action="dologin.php" method="post" class="login" onsubmit="return check();">
        <?php
            if ( isset( $error ) ) {
                ?><div class="error">Λάθος όνομα ή κωδικός πρόσβασης!</div><?php
            }
        ?>
        <div>
            <label>Username:</label> <input type="text" name="username" id="username" />
        </div>
        <div>
            <label>Password:</label> <input type="password" name="password" />
        </div>
        <input type="submit" value="Login" class="submit" />
    </form>
	<script type="text/javascript">
		function check() {
			var input = document.getElementById( 'username' );
			if ( input.value.length <= 3 ) {
				alert( 'Το όνομά σου είναι πολύ μικρό' );
				return false;
			}
			return true;
		}
	</script>
<?php
    include 'footer.php';
?>
