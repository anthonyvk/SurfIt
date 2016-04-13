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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<?php include_once('script/style.php'); ?>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="head" style="min-height:50px;max-height:50px;border: 1px solid #CCC;min-width:100%;padding:0px;">
    <img src="img/logo.jpg" width="5%" height="50px" alt="Maaya" style="float:right" />
    <table width="0" border="0" style="padding-top:3px">
      <tr>
        <td>
          <ul id="MenuBar1" class="MenuBarHorizontal">
              <li><a href="home.php">Home</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="start.php">Start Event</a></li>
              <li><a href="leaderboard.php">Leaderboard</a></li>
          </ul></td>
      </tr>
    </table>
</div>

<H1>Surf-IT</H1>

<?php
    if(isset($_POST['submit'])) {
        include_once("script/dbconnect.php");
		    $sql = "select uname from acc where uname='" . $_POST['uname'] . "' and pwd='" . $_POST['pwd'] . "'";
        echo $sql;
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result);
        if(!empty($row))   {
           echo "<div class='correct'>";
           echo "\nLogin Success";
           //mysqli_close($db);
           echo "\nRedirect to the Start page in the new Tab";
           echo "</div>";
        }
        else  {
            echo "\n<div class=\"error\">Invalid Login Information</div>";
        }
  		mysqli_close($db);
    }

?>


<form action="" method="post" style="border: 1px solid #CCC;">

<table width="311" border="0" align="center">
  <tr>
    <td width="131">Username :</td>
    <td width="170"><span id="sprytextfield1">
      <input type="text" name="uname" id="uname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><span id="sprypassword1">
      <input type="password" name="pwd" id="pwd" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input type="submit" name="submit" />
    </td>
    </tr>
</table>

</form>

<div class="foot" style="position:absolute;bottom:0px;left:0;width:100%;background-color:#000;min-width:100%;min-height:20px;color:#FFF">
Acknowledgement to the following contributors . Surf-IT Team :) : <br />
Harish G , Ashwini B , Varsha B , Dechamma , Hema R , Mandar K , Prasad Kumar , Prasad A , Soumya P , Siddeshi C.R , Bharath G , Anthony VK.


</div>
	<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
    </script>
</body>
</html>
