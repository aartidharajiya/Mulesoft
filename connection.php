<?php
/**************************Connection********************************/
	
$connection=new mysqli("localhost","root","","movies");
if($connection->connect_errno)  //connect_errno returns error if there any error.
{
    echo $connection->connect_error; //connect_error returns error description if there if any error ocurs.
    exit;
}
?>
