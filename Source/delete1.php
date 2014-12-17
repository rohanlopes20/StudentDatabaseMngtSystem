<?php
$rollno = $_POST['rollno'];

if($rollno) {
	$connect = mysql_connect("localhost","root","") or die("Couldn't connect MySql!");
	mysql_select_db("data") or die("Couldn't find MySql database!");
	$queryreg = mysql_query("DELETE * FROM student WHERE rollno='$rollno'");
} else {
	die("please enter rollno to delete !!");
}
?>