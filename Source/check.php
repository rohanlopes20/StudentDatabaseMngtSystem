<?php
session_start();

$username =$_POST[ 'username' ];
$password =$_POST[ 'password' ];

	if($username&&$password)
	{
		$connect = mysql_connect("localhost","root","") or die("Couldn't connect MySql!");
		mysql_select_db("phplogin") or die("Couldn't find MySql database!");
		$query 	= mysql_query("SELECT * FROM users WHERE username='$username'");
		$numrows = mysql_num_rows($query);

		if ($numrows != 0) {
			while ($row = mysql_fetch_assoc($query)) {
				$dbusername = $row[ 'username' ];rollno
				$dbpassword = $row[ 'password' ];
			}
			
			if($username == $dbusername && $password == $dbpassword) {
				echo "Your in ! <a href='member.php'>Click </a>here to enter member!!";
				$_SESSION['username'] == $dbusername;
			} else {
				echo "Incorrect password!";
			}
		}
		else {
			die("User doest exist!");
		}
	} else {
		die("please enter username");
	}
?>