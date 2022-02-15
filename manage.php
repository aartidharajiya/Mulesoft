<?php
	$db = new mysqli("localhost","root","","movies");
	if ($db->connect_errno)
	{
		echo $db->connect_error;
		exit;
	}
    $name=$_POST['name'];
    $actor=$_POST['actor'];
    $actress=$_POST['actress'];
    $date=$_POST['date'];
    $director=$_POST['director'];
    $sql="insert into movie values ('','$name','$actor','$actress','$director','$date')";
    $db->query($sql);
    header("location:index.php");
?>