<?php
	session_start();
	if(isset($_SESSION["LoggedIn"]))
		if($_SESSION["LoggedIn"]=='True')
		{
			header("Location: /WorkstationBuilderWEMiniProj/homePage.php");
			exit();
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
		<form name="LoginForm" action="LoginHandler.php" onsubmit="return validateForm()" method="post">
			<tr>	<td><font color="white">UserName:</font></td>				<td><input type="text" name="username" REQUIRED /></td></tr><br>
			<tr>	<td><font color="white">Password:</font></td>				<td><input type="password" name="pw" REQUIRED /></td></tr><br>
			<tr><td colspan="2"><center><input type="submit" value="Login" /><input type="reset" value="Reset" /></center></td><tr>
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