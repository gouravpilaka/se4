<?php

header("Content-Type:application");
require "data.php";





if(!empty($_GET['name']) and !empty($_GET['price']))
{
	$name=$_GET['name'];
	$price=$_GET['price'];

	$r = get_price($name,$price);
	
	if(empty($r))
	{
		response(200,"Product Not Found",NULL);
	}
	else
	{
		response(200,"Product Found",$r);
	}
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data is']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}

?>
