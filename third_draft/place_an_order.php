<?php
session_start();
include("includes/functions.php");

//this function writes the header for the html document and takes the title for the page as a parameter
docheader("Cupcake Country - Place An Order");

include("includes/header.php");
include("includes/navbar.php");
?>
<div id="creator">
<h1>Design Your Cupcake</h1>

	<div id="display"></div>
	<div class="form" id="flavor">
		<p>Choose a flavor</p>
		<form>
			<input class="flavortarget" type="radio" name="flavor" value="chocolate" />Chocolate<br />
			<input class="flavortarget" type="radio" name="flavor" value="vanilla" />Vanilla<br />
		</form>
	</div>
</div>

<?php

/*When the form is done and checked through javascript,
 PHP will use mysqli to connect with the database and enter tuples for the orders
 and an e-mail will be sent to the administrator to inform them that an order has been placed and the client is awaiting correspondence
*/
    include("includes/footer.php");
?>
</body>
</html>