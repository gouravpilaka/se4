<?php

function get_price($name, $price)
{


  	$host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
  $conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql = ("SELECT price FROM product WHERE product = '$name'");

	$stmt = $conn->query("$sql");
	$row = $stmt->fetch();
	$p = $row["price"];
        echo $p;
	echo $price;
	
	if ($p==$price) 
	  {
  		  return "true"; }
  	else 
 	{
  		return "false";
		echo $p;
	}
	
}
$conn = NULL;

?>


