<?php

$connect = mysql_connect("a6630130_local","a6630130_root","qwer1234");

if($connect)
{
	$query = "CREATE DATABASE comments";

	if(mysql_query($query))
	{
		$query1 = "CREATE TABLE data2(Name varchar(20), Comment varchar(500))";
		mysql_select_db("comments",$connect);

		if(mysql_query($query1))
		{
			echo "database created";
		}
		else
		{
			die("failed to create");
		}

	}else
	{
		die("Failed to create to database:". mysql_error());
	}
}
else
{
	die("Failed to connect to database:". mysql_error());
}

?>