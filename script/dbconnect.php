<!--

*********************************************************************
Please retain this licensing information during redistribution.
*********************************************************************
Surf-IT - is a web application designed to organize online
event for Maaya 2014 event , organized by PESIT - Bangalore
South Campus. Adobe Dreamweaver Spry menu plugin is used in developing 
this application .

The Authors for this application are :
Anthony vinay kumar S - anthonyvinaykumar1992@gmail.com
Harish G - hhgsharish@gmail.com 

You are allowed to redistribute this application by retaining 
this license information. For further details and use of application 
you can contact the above mentioned mail id.
*********************************************************************

-->

<!--
This page contains connectivity information for the database. You 
can configure this based on your web server.
-->

<?php
	$host = "mysql.hostinger.in";
	$uname = "u977931735_surf";
	$pwd = "surfit";
	$db = "u977931735_surf";
	$db = mysqli_connect($host, $uname , $pwd , $db);
	
	$SURFIT_LEVEL = 14;		//Change this to change the number of levels.
?>
