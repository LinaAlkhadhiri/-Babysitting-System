

<?php
include("connection.php");
	session_destroy(); //end session to logout
	//header ("location: index.php"); //redirect to login page

echo "
		<script>
			window.location.href = 'index.php';
		</script>
		";

?>