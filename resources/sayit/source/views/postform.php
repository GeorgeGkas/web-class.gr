<h2>Γράψε κάτι</h2>
<form action="send.php" method="post" onsubmit="return check();">
	<div class="text">
		<input name="shout" value="" id="shout" type="text" />
	</div>
	<input type="submit" value="Πες το!" class='submit' />
</form>
<script type="text/javascript">
	function check() {
		var input = document.getElementById( 'shout' );
		var text = input.value;

		if ( validate( text ) ) {
			return true;
		}
		alert( "Δεν μπορείς να στείλεις ένα κενό μήνυμα!" );
		return false;
	}
	function validate( text ) {
		if ( text == '' ) {
			return false;
		}
		return true;
	}
</script>
