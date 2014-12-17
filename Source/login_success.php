<?php
session_start();
if( isset($_SESSION['myusername']) ) {
	header("location:user_home.php");
}
?>

<html>
<body>
	Login Successful :D
</body>
</html>