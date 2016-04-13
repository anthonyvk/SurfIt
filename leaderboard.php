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

Acknowledgement to the following contributors . Surf-IT Team :) : 
Harish G , Ashwini B , Varsha B , Dechamma , Hema R , Mandar K , 
Prasad Kumar , Prasad A , Soumya P , Siddeshi C.R , Bharath G , Anthony VK (a.k.a Ant)
*********************************************************************

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surf-IT - Maaya</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<?php include_once('script/style.php'); ?>

</head>

<body>

<div class="head" style="min-height:50px;max-height:50px;border: 1px solid #CCC;min-width:100%;padding:0px;">
    <img src="img/logo.png" width="6%" height="50px" alt="Maaya" style="float:right" />
    <table width="0" border="0" style="padding-top:3px">
      <tr>
        <td>
          <ul id="MenuBar1" class="MenuBarHorizontal">
              <li><a href="index.htm">Home</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="start.php">Start Event</a></li>
              <li><a href="leaderboard.php">Leaderboard</a></li>
          </ul></td>
      </tr>
    </table>	
</div>

<center><img src="img/logo.png" width="30%" height="30%" alt="SurfIT" />

<fieldset style="width:80%">
	<legend><b>Leaderboard</b></legend>
    <table width="0" border="1" bordercolordark="#000000" bordercolor="#000000">
      <tr>
        <th width="33%">Team :</td>
        <th width="33%">Level :</td>
        <th width="33%">Time :</td>
      </tr>
<?php
	include_once("script/dbconnect.php");
	$sql = "select * from scoreboard order by level desc";
    //echo $sql;
    $result = mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($result))	{
      echo "<tr>
        <td>" . $row['uname'] . "</td>
        <td>" . $row['level'] . "</td>
        <td>" . $row['tme'] . "</td>
      </tr>";
	}
  mysqli_close($db);
?>
    </table>
</fieldset>
<br /><br /><br /><br /><br />

</center>

<div class="foot" style="width:100%;background-color:#000;min-width:100%;min-height:20px;color:#FFF">
Acknowledgement to the following contributors . Surf-IT Team :) : <br />
Harish G , Ashwini B , Varsha B , Dechamma , Hema R , Mandar K , Prasad Kumar , Prasad A , Soumya P , Siddeshi C.R , Bharath G , Anthony VK.

</div>





	<script type="text/javascript">
		var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
</body>
</html>
