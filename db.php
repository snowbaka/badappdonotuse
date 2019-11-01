<?php 
$hostname = 'localhost';
$username='root';
$password='';
$dbname='bluebird';
$port=3306;
function query($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		echo "Connection fail<br>";
		die($conn->connect_error);
	}
	$result = $conn->query($sql);
	if(!$result)
	{
		echo "SQL execution fail <br>";
		die($conn->error);
	}
	$rows = mysqli_fetch_all($result);
	return $rows;
}
function execsql($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		echo "Connection fail<br>";
		die($conn->connect_error);
	}
	$result = $conn->query($sql);
	return $result;
}
?>