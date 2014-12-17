<?php

$rollno = $_POST['rollno'];
$name = $_POST['studentname'];
$class = $_POST['class'];
$marks = $_POST['marks'];

if($rollno&&$name&&$class&&$marks) {
	$connect =mysql_connect("localhost","root","") or die("Couldn't connect MySql!");
	mysql_select_db("data") or die("Couldn't find MySql database!");
	$queryreg =mysql_query("INSERT INTO student VALUES ('$rollno','$name','$class','$marks')");	
} else {
	die("please enter rollno !!");
}
?>