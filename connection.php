<?php
/**************************Connection********************************/
	
$connection=new mysqli("localhost","root","","movies");
if($connection->connect_errno)
{
    echo $connection->connect_error;
    exit;
}
?>