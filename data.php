<?php

function get_price($name, $price)
{


  	$host = "tcp:localhost01.database.windows.net,1433";
	$user = "pilakag1@localhost01";
	$pwd  = "Pilakag_1";
	$db   = "pilakag1_db";
  $conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql = ("SELECT * FROM product WHERE product = '$name' and price = '$price'");
$sql_run = $conn->query($sql);
$exe = $sql_run->rowCount();
echo "<h1> $exe </h1>" ;

if ($exe == 0)
 $y = "false";
else
    {
    return true;
	}
	return $y;
  $conn = NULL;
}

?>


