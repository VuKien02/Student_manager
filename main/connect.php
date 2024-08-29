<?php
	$connect = mysqli_connect('localhost', 'root', '', 'student_management');
	if(mysqli_error($connect))
	{
		die("Connection failse ! " . mysqli_error($connect));
	}
	echo "Connected successfully ! ";
?>