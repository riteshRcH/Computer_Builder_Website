<?php
	session_start();
	if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"]=='False')
	{
		header("Location: /WorkstationBuilderWEMiniProj/Login.php");
		exit();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Select CPU</title>
	<meta name="keywords" content="Copmuter Building Assistant, Performance Advisor, Compatibility Issue Tracker, PC Builder" />
	<meta name="description" content="Copmuter Building Assistant, Performance Advisor, Compatibility Issue Tracker" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/smoothmenu.css" />
	
	<script>
		function validateChoice()
		{
			var radios = document.forms["selectCPUForm"]["CPUID"];
			for(var i=0;i<radios.length;i++)
				if(radios[i].checked)
					return true;
			alert("Select a CPU 1st");
			return false;
		}
	</script>
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
    
    <div id="main_content" class="scrollbars">
	
	<?php
		$conn = mysql_connect("localhost", "root", "") or die("Couldnt connect to server, Error: ".mysql_error());
		$db = mysql_select_db("weminiprojdb", $conn) or die("Couldnt select DB, Error: ".mysql_error());

		//echo "conn success<br />";

		$columnNames[0] = "User's Choice";
		$index = 1;
		
		echo '<form name="selectCPUForm" method="get" action="MoboSelection.php" onsubmit="return validateChoice()"><center><input type="submit" value="Next" style="color: red; width: 90px; height: 40px;"/></center><br /><br />';
		echo '<table border="5" cellpadding="5" cellspacing="11">';
		$result = mysql_query("show columns from cpu");
		echo "<tr><th style=\"color: white\">User's Choice</th>";
		while($row = mysql_fetch_array($result))
		{
			echo '<th style="color: white">'.($columnNames[$index] = $row["Field"]).'</th>';
			$index += 1;
		}
		echo "</tr><tr>";
			
		$result = mysql_query("select * from cpu");
		while($row = mysql_fetch_array($result))
		{
			echo '<td><input type="radio" name="CPUID" value="'.$row['CPUID'].'" /></td>';
			for($index = 1; $index < count($columnNames); $index += 1)
			{
				if($columnNames[$index]=="hyperThreading" || $columnNames[$index]=="Vtx" || $columnNames[$index]=="Vtd" || $columnNames[$index]=="TurboBoost" || $columnNames[$index]=="HyperTransport")
				{
					if($row[$columnNames[$index]])
						echo "<td style=\"color: white\">Yes</td>";
					else
						echo "<td style=\"color: white\">No</td>";
				}else
					echo "<td style=\"color: white\">{$row[$columnNames[$index]]}</td>";
			}
			$index  = 1;
			echo "</tr>";
		}
		echo '</table></form>';
	?>
        
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