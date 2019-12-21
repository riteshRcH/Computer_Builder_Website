<?php

$conn = mysql_connect("localhost", "root", "") or die("Couldnt connect to server, Error: ".mysql_error());
$db = mysql_select_db("weminiprojdb", $conn) or die("Couldnt select DB, Error: ".mysql_error());

//echo "conn success<br />";

$result = mysql_query("select * from registeredusers where Username='{$_REQUEST["username"]}' and password='{$_REQUEST['pw']}'");
if(mysql_num_rows($result)>0)
{
	echo '<script>alert("Username Password Combo already registered! Try another username");window.location.href = "/WorkstationBuilderWEMiniProj/SignUp.php";</script>';
	mysql_close($conn);
	#header('Location: /WorkstationBuilderWEMiniProj/SignUp.php');
	exit();
}else
{
	$HobbiesString = "";
	if(isset($_REQUEST['PrgminChkBox']))
		$HobbiesString += "{$_REQUEST['PrgminChkBox']}; ";
	if(isset($_REQUEST['NatureWatchChkBox']))
		$HobbiesString += "{$_REQUEST['NatureWatchChkBox']}; ";
		
	$gender = isset($_REQUEST['gender'])?$_REQUEST['gender']:"Male";
	$insertQuery = "insert into registeredusers(FirstName, MiddleName, LastName, Email, Username, Password, SecurityQ, SecurityQAns, Address, Gender, Country, Hobbies) values('{$_REQUEST['fname']}', '{$_REQUEST['mname']}', '{$_REQUEST['lname']}', '{$_REQUEST['email']}', '{$_REQUEST['username']}', '{$_REQUEST['pw']}', '{$_REQUEST['securityQ']}', '{$_REQUEST['securityQAns']}', '{$_REQUEST['addr']}', '{$gender}', '{$_REQUEST['CountrySelection']}', '{$HobbiesString}')";

	//echo "Query is: {$insertQuery}";

	if(mysql_query($insertQuery)>0)
	{
		echo '<script lanuage="text/javascript">';
		echo 'alert("Successfully registered into DB! You may now process to login page.");';
		echo 'window.location.href = "/WorkstationBuilderWEMiniProj/homePage.php";';
		echo '</script>';
		#header('Location: /WorkstationBuilderWEMiniProj/homePage.php');
		mysql_close($conn);
		exit();
	}else
	{
		mysql_close($conn);
		die("Exception occured: ".mysql_error());
	}
}
?>