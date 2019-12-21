<?php

$conn = mysql_connect("localhost", "root", "") or die("Couldnt connect to server, Error: ".mysql_error());
$db = mysql_select_db("weminiprojdb", $conn) or die("Couldnt select DB, Error: ".mysql_error());

//echo "conn success<br />";

$result = mysql_query("select * from registeredusers where Username='{$_REQUEST["username"]}' and password='{$_REQUEST['pw']}'");
if(mysql_num_rows($result)>0)
{
	session_start();
	$_SESSION['Username'] = $_REQUEST["username"];
	$_SESSION['password'] = $_REQUEST['pw'];
	$_SESSION['LoggedIn'] = 'True';
	
	$_SESSION['CPUID'] = "";
	$_SESSION['MoboID'] = "";
	$_SESSION['RAMID'] = "";
	$_SESSION['SMPSID'] = "";
	$_SESSION['StorageID'] = "";
	$_SESSION['MonitorID'] = "";
	$_SESSION['KBID'] = "";
	$_SESSION['FanID'] = "";
	$_SESSION['CabinetID'] = "";
	
	$_SESSION['PerformanceValueTotal'] = 0.0;
	mysql_close($conn);
	header('Location: /WorkstationBuilderWEMiniProj/homePage.php');
	exit();
}else
{
	mysql_close($conn);
	echo '<script lanuage="text/javascript">';
	echo 'alert("Login Failed! retry..");';
	echo 'window.location.href = "/WorkstationBuilderWEMiniProj/Login.php";';
	echo '</script>';
}
?>