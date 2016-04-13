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
<title>Surf-IT - Register</title>
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

<?php
			if(isset($_POST['btn_save']))
			{
				    include_once("script/dbconnect.php");

            $sql = "select * from acc where uname='" . $_POST['uname'] . "'";
            $result = mysqli_query($db,$sql);
            $dump = mysqli_fetch_array($result);
            if(empty($dump))
            {
    				$sql = "INSERT INTO acc (uname,pwd,reciept,p1,p2,phno,college) VALUES('" . $_POST['uname'] . "','" . $_POST['pwd'] . "','" . $_POST['reciept'] . "','" . $_POST['p1'] . "','" . $_POST['p2'] . "','" . $_POST['contact'] . "','" .  $_POST['college'] . "')";
    				//echo $sql;
    				$result = mysqli_query($db,$sql);

            $sql = "insert into scoreboard values ('" . $_POST['uname'] . "',1,'')";
            $result = mysqli_query($db,$sql);

    				mysqli_close($db);
    				echo "<div class=\"correct\"><br />Thank you! Registration is Successfull.<br /></div>";
                }
                else
                {
                    echo "<div class=\"error\"><br>Username Already Exists<br></div>";
                }
			}
            else
            {
                 echo "
                <fieldset style=\"width:80%\">
					<legend><b>Register</b></legend>

                <form name=\"form1\" method=\"post\" action=\"register.php\">
                  <table border=\"0\" align=\"center\" style=\"border: 1px solid #CCC;\">
                          <tr>
                            <td width=\"50%\">Reciept :</td>
                            <td width=\"50%\"><span id=\"sprytextfield1\">
                              <input name=\"reciept\" type=\"text\" id=\"reciept\" size=\"40\" maxlength=\"50\" />
                            <span class=\"textfieldRequiredMsg\">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td>Participant 1 :</td>
                            <td><span id=\"sprytextfield2\">
                              <input name=\"p1\" type=\"text\" id=\"p1\" size=\"40\" maxlength=\"50\" />
                              <span class=\"textfieldRequiredMsg\">A value is required.</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td>Participant 2 :</td>
                            <td>
                              <span id=\"sprytextfield3\">
                              <input name=\"p2\" type=\"text\" id=\"p2\" size=\"40\" maxlength=\"50\" />
                            <span class=\"textfieldRequiredMsg\">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td>College Name :</td>
                            <td>
                              <span id=\"sprytextfield4\">
                              <input name=\"college\" type=\"text\" id=\"college\" size=\"40\" maxlength=\"50\" />
                            <span class=\"textfieldRequiredMsg\">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td>Contact Number :</td>
                            <td>
                              <span id=\"sprytextfield5\">
                              <input name=\"contact\" type=\"text\" id=\"contact\" size=\"40\" maxlength=\"50\" />
                            <span class=\"textfieldRequiredMsg\">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td>Username :</td>
                            <td>
                              <span id=\"sprytextfield6\">
                              <input name=\"uname\" type=\"text\" id=\"uname\" size=\"40\" maxlength=\"50\" />
                            <span class=\"textfieldRequiredMsg\">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td>Password</td>
                            <td>
                              <span id=\"sprypassword1\">
                              <input name=\"pwd\" type=\"password\" id=\"pwd\" size=\"40\" maxlength=\"50\" />
                            <span class=\"passwordRequiredMsg\">A value is required.</span></span></td>
                          </tr>
                          <tr>
                          <td>
                          <input type=\"submit\" name=\"btn_save\" id=\"btn_save\" value=\"Submit\">
                          </td></tr>
                  </table>

                </form>
				</fieldset>";
            }
?>

</center>
<div class="foot" style="position:fixed;bottom:0px;left:0;width:100%;background-color:#000;min-width:100%;min-height:20px;color:#FFF">
Acknowledgement to the following contributors . Surf-IT Team :) : <br />
Harish G , Ashwini B , Varsha B , Dechamma , Hema R , Mandar K , Prasad Kumar , Prasad A , Soumya P , Siddeshi C.R , Bharath G , Anthony VK.


</div>





	<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["change"]});
    </script>
</body>
</html>
