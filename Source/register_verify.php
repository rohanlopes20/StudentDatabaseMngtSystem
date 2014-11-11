<?php
include("db.php");
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
 
{
//Prevent SQL injections
$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
 
 
//Get MD5 hash of password
$password = ($_POST['password']);
 
//Check to see if username exists
$sql = mysql_query("SELECT username FROM members WHERE username = '".$username."'");
if (mysql_num_rows($sql)>0)
{
die ("Username taken.");
}
 
 
mysql_query("INSERT INTO members (username, password, email) VALUES ( '$username', '$password', '$email')") or die (mysql_error());
echo "Account created." ;
 
}
?>
 
<html>
<head>
</head>
<body>
<a href="login_main.php">Login</a>
</body>
</html>