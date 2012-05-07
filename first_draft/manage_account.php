<?php
session_start();
include("includes/functions.php");

//this function writes the header for the html document and takes the title for the page as a parameter
docheader("Cupcake Country - Manage Account");
include("includes/header.php");
include("includes/navbar.php");
include("includes/passwords.php");
?>        
    <div id="managebody">    
        <h1>Manage Account</h1>
        <p><a href="index.php">Back to home</a></p>
	<p><a href="user_login.php?logout=yes">Sign out</a></p>
        <div id="pastorders">
            <p>This is where the client can view past orders</p>
        </div>
        <div id="updateinfo">
            <p>This is where the client can update their information</p>
        </div>
     </div>
        <?php

    include("includes/footer.php");
?>

</body>
</html>