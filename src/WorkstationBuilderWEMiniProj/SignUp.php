<?php
	session_start();
	if(isset($_SESSION["LoggedIn"]))
		if($_SESSION["LoggedIn"]=='True')
		{
			echo '<script lanuage="text/javascript">';
			echo 'alert("You are already logged in!");';
			echo 'window.location.href = "/WorkstationBuilderWEMiniProj/homePage.php";';
			echo '</script>';
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Register</title>
	<meta name="keywords" content="Copmuter Building Assistant, Performance Advisor, Compatibility Issue Tracker, PC Builder" />
	<meta name="description" content="Copmuter Building Assistant, Performance Advisor, Compatibility Issue Tracker" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />

	<script language="javascript" type="text/javascript">
	function validateForm()
	{
		//var firstname=document.forms["RegForm"]["fname"].value, isfirstNameEmpty = true;
		//var middlename=document.forms["RegForm"]["mname"].value, ismiddleNameEmpty = true;
		//var lastname=document.forms["RegForm"]["lname"].value, islastNameEmpty = true;
		var email=document.forms["RegForm"]["email"].value;
		//var username = document.forms["RegForm"]["username"].value, isUserNameEmpty = true;
		var pw=document.forms["RegForm"]["pw"].value, isPwEmpty = true;
		var confirmPw=document.forms["RegForm"]["confirmPw"].value, isConfirmPwEmpty = true;
		var areBothPWDifferent = pw!=confirmPw;
		//var securityQ=document.forms["RegForm"]["securityQ"].value, isSecurityQEmpty = true;
		//var securityQAns=document.forms["RegForm"]["securityQ"].value, isSecurityQAnsEmpty = true;
		/*if(firstname==null || firstname=="")
		{
			alert("First name field cannot be left empty!");
			isfirstNameEmpty = true;
		}
		if(middlename==null || middlename=="")
		{
			alert("Middle name field cannot be left empty!");
			ismiddleNameEmpty = true;
		}
		if(lastname==null || lastname=="")
		{
			alert("Last name field cannot be left empty!");
			islastNameEmpty = true;
		}
		if(email==null || email=="")
		{
			alert("Email field cannot be left empty!");
			isEmailEmpty = true;
		}
		if(securityQ==null || securityQ=="")
		{
			alert("Security Question cannot be left empty!");
			isSecurityQEmpty = true;
		}
		if(securityQAns==null || securityQAns=="")
		{
			alert("First name field cannot be left empty!");
			isSecurityQAnsEmpty = true;
		}
		if(pw==null || pw=="")
		{
			alert("Pasword field cannot be left empty!");
			isPwEmpty = true;
		}
		if(confirmPw==null || confirmPw=="")
		{
			alert("Confirm Password field cannot be left empty!");
			isConfirmPwEmpty = true;
		}
		if(username==null || username=="")
		{
			alert("UserName field cannot be left empty!");
			isUserNameEmpty = true;
		}
		if(isSecurityQAnsEmpty || isSecurityQEmpty || isEmailEmpty || islastNameEmpty || ismiddleNameEmpty || isfirstNameEmpty || isPwEmpty || isConfirmPwEmpty)
			return false;*/
		if(areBothPWDifferent)
		{
			alert("Entered Passwords do not match");
			return false;
		}
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(!re.test(email))
		{
			alert("Email ID entered is not valid");
			return false;
		}
			
	}
	</script>

	<link rel="stylesheet" type="text/css" href="css/smoothmenu.css" />
</head>

<body>

<!-- START OF HEADER -->
<div id="outerDivision">
	
    <div id="TopHeaderDiv">
    	<div id="site_title"><h1><a href="homePage.html">Workstation Building Assistant</a></h1></div>
        <div class="cleaner"></div>
    </div> <!-- END of header -->
    
    <div id="mainMenu" class="ddsmoothmenu">
        <ul>
            <li><a href="homePage.php" class="selected">Home</a></li>
			<li><a href="Build.php">Build!</a></li>
			<li><a href="homePage.php">Performance/Specs Advisor</a></li>
			<li><a href="ContactUs.php">Contact us</a></li>
			<li><a href="Credits.php">Credits</a></li>
			
			<li><a href="SignUp.php">SignUp</a></li>
            <li><a href="Login.php">Login</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- END of menu -->
	
    <div id="main_content">
	<center>
	<table border="5" bordercolor="blue" cellpadding="11" valign="top" width="100%">
		<form name="RegForm" action="SignUpHandler.php" onsubmit="return validateForm()" method="post">
			<tr>	<td><font color="white">First name:</font></td>				<td><input type="text" name="fname"  /></td></tr><br>
			<tr>	<td><font color="white">Middle name:</font></td>			<td><input type="text" name="mname" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Last name:</font></td>				<td><input type="text" name="lname" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Email:</font></td>					<td><input type="text" name="email" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">UserName:</font></td>				<td><input type="text" name="username" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Password:</font></td>				<td><input type="password" name="pw" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Confirm Password:</font></td>		<td><input type="password" name="confirmPw" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Security Question:</font></td>		<td><input type="text" name="securityQ" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Security Q's Answer:</font></td>	<td><input type="text" name="securityQAns" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Address</font></td>					<td><textarea name="addr" rows="11" cols="70"></textarea></td></tr><br>
			<tr>	<td><font color="white">Gender:</font></td>					<td><input type="radio" name="gender" value="Male" CHECKED>Male</input><br>
																					<input type="radio" name="gender" value="Female">Female</input></td></tr><br>
			<tr>	<td>Select Country:</td>		<td><select name="CountrySelection">
														<option value="India">India</option>
														<option value="US">US</option>
														<option value="UK">UK</option>
														<option value="Japan">Japan</option>
													</select></td></tr><br>
			<tr>	<td>Hobbies:</td>				<td><input type="checkbox" name="PrgminChkBox" value="Prgmin">Prgmin</input>
														<input type="checkbox" name="NatureWatchChkBox" value="Nature Watch">Nature Watch</input></td></tr><br>
			<tr><td colspan="2"><center><input type="submit" value="Submit to server and Register" /><input type="reset" value="Reset" /></center></td><tr>
		</form>
		</table>
    </center>    
        <div class="cleaner"></div>
    
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->

<div id="footerOuterDivisionWrapper">
	<div id="FooterDivision">
    	<div class="col one_third">
        	<h4>WebSite Developer's Build Pic</h4>
            <ul class="devBuildPics">
                <li><a href="#"><img src="images/01.png" alt="Flickr 01" /></a></li>
                <li><a href="#"><img src="images/02.png" alt="Flickr 02" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="images/03.png" alt="Flickr 03" /></a></li>
                <li><a href="#"><img src="images/04.png" alt="Flickr 04" /></a></li>
                <li><a href="#"><img src="images/05.png" alt="Flickr 05" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="images/06.png" alt="Flickr 06" /></a></li>
                 <li><a href="#"><img src="images/03.png" alt="Flickr 07" /></a></li>
                <li><a href="#"><img src="images/04.png" alt="Flickr 08" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="images/02.png" alt="Flickr 09" /></a></li>
            </ul>  
        </div>
		
        <div class="col one_third">
        	<h4>Misc Text</h4>
            <ul class="twitter_post">
	            <li>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </li>
                <li>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </li>
                <li>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </li>
			</ul>
        </div>
        
        <div class="col one_third no_margin_right">
        	<h4>Misc Text</h4>
			<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </p>
			
			<div class="cleaner h20"></div>
            <!--<div class="footerSocialConnect">
                <a href="#"><img src="images/facebook.png" title="Facebook" alt="Facebook" /></a>
                <a href="#"><img src="images/flickr.png" title="Flickr" alt="Flickr" /></a>
                <a href="#"><img src="images/twitter.png" title="Twitter" alt="Twitter" /></a>
                <a href="#"><img src="images/youtube.png" title="Youtube" alt="Youtube" /></a>
                <a href="#"><img src="images/feed.png" title="RSS" alt="RSS" /></a>
			</div>-->
			<div class="cleaner"></div>
        </div>
		
        <div class="cleaner"></div>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>