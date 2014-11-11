<?php

$rollno = $_POST['rollno'];

if($rollno)
{
$connect =mysql_connect("localhost","root","") or die("Couldn't connect MySql!");
mysql_select_db("data") or die("Couldn't find MySql database!");
$query =mysql_query("SELECT * FROM student WHERE rollno='$rollno'");
$numrows =mysql_num_rows($query);
	if ($numrows!=0)
	{
		while ($row =mysql_fetch_assoc($query))
		{
		$dbrollno =$row['rollno'];
		$dbstudentname =$row['name'];
		$dbclass =$row['class'];
		$dbmarks =$row['marks'];
		}
		if($rollno==$dbrollno)
				{
				echo "Student Information...<br>".$dbrollno;
				echo "<br>".$dbstudentname;
				echo "<br>".$dbclass;
				echo "<br>".$dbmarks;
				
				}
				else
				{
				echo "Incorrect password!";
				}
	}
}	
else
{
die("please enter rollno !!");
}
?>