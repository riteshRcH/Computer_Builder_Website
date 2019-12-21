<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Comp Building Assistant</title>
	<meta name="keywords" content="Copmuter Building Assistant, Performance Advisor, Compatibility Issue Tracker, PC Builder" />
	<meta name="description" content="Copmuter Building Assistant, Performance Advisor, Compatibility Issue Tracker" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/smoothmenu.css" />
</head>

<body>

<!-- START OF HEADER -->
<div id="outerDivision">
	
    <div id="TopHeaderDiv">
    	<div id="site_title"><h1><a href="homePage.php">Workstation Building Assistant</a></h1></div>
        <div class="cleaner"></div>
    </div> <!-- END of header -->
    
    <div id="mainMenu" class="ddsmoothmenu">
        <ul>
            <li><a href="homePage.php" class="selected">Home</a></li>
			<li><a href="Build.php">Build!</a></li>
			<li><a href="homePage.php">Performance/Specs Advisor</a></li>
			<li><a href="ContactUs.php">Contact us</a></li>
			<li><a href="Credits.php">Credits</a></li>
			<?php
				session_start();							//load session data
				if(isset($_SESSION['LoggedIn']))
				{
					if($_SESSION['LoggedIn']=='True')
						echo '<li><a href="LogoutHandler.php">Logout</a></li>';
				}else
				{
					echo '<li><a href="SignUp.php">SignUp</a></li>';
					echo '<li><a href="Login.php">Login</a></li>';
				}
			?>
        </ul>
        <br style="clear: left" />
    </div> <!-- END of menu -->

    <div id="frontPromoImg">
		<div id="promoImg" style="width:940px; height:340px;">
			<img src="./images/dreamPCLogo1.jpg" />
		</div> 
    </div>
    
    <div id="main_content">
		<center><font color="white" size="5">BUYING GUIDES/JARGONs Download</font></center><br /><br />
        <div class="col one_fourth homePageSpecsContent">
            <h2 class="s1"><img src="images/calendar-32px.png" alt="MotherBoard" /> <a href="./SpecsDownload/Mobo.docx">MotherBoard</a></h2>
            <p>Get to know the best in town Motherboards for gaming and high end workstations</p>
        </div>
		
		<div class="col one_fourth homePageSpecsContent">
            <h2 class="s2"><img src="images/notebook-32px.png" alt="Image 03" /><a href="./SpecsDownload/CPU.docx">CPU</a></h2>
            <p>Get to know the best in town CPUs for gaming and high end workstations</p>
        </div>
		
        <div class="col one_fourth homePageSpecsContent">
            <h2 class="s1"><img src="images/map-32px.png" alt="Image 02" /><a href="./SpecsDownload/HDD.docx">HDD/SSD/SSHD</a></h2>
            <p>Get to know the best in town HDD/SSD/SSHD for gaming and high end workstations</p>
        </div>
		
        <div class="col one_fourth no_margin_right homePageSpecsContent">
            <h2 class="s3"><img src="images/post-it-32px.png" alt="Image 04" /><a href="./SpecsDownload/Fans.docx">Fans/Liquid Cooling</a></h2>
            <p>Get to know the best in town cooling for gaming and high end workstations</p>
        </div>
		
        <div class="col one_fourth homePageSpecsContent">
            <h2 class="s1"><img src="images/rosette-32px.png" alt="Image 05" /><a href="./SpecsDownload/ram.docx">RAM</a></h2>
            <p>Get to know the best in town RAM for gaming and high end workstations</p>
        </div>
		
		<div class="col one_fourth homePageSpecsContent">
            <h2 class="s1"><img src="images/map-32px.png" alt="Image 02" /><a href="./SpecsDownload/Monitors.docx">Monitors</a></h2>
            <p>Get to know the best in town Monitors for gaming and high end workstations</p>
        </div>
		
        <div class="col one_fourth homePageSpecsContent">
            <h2 class="s2"><img src="images/name-tag-32px.png" alt="Image 07" /><a href="./SpecsDownload/KB.docx">Keyboards/Mouse</a></h2>
            <p>Get to know the best in town Keyboards/Mouse for gaming and high end workstations</p>
        </div>
		
        <div class="col one_fourth no_margin_right homePageSpecsContent">
            <h2 class="s3"><img src="images/flickr-32px.png" alt="Image 08" /><a href="./SpecsDownload/Cabinets.docx">Cabinets</a></h2>
            <p>Get to know the best in town Cabinets for gaming and high end workstations</p>
        </div>
		
		<div class="col one_fourth homePageSpecsContent">
            <h2 class="s3"><img src="images/flickr-32px.png" alt="Image 08" /><a href="./SpecsDownload/smps.docx">SMPS</a></h2>
            <p>Get to know the best in town SMPS for gaming and high end workstations</p>
        </div>
        
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