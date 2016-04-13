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

<?php include_once("script/style.php"); ?>
</head>

<body>
<?php
    $cookie_name = "surfit";
?>
<style>
        *   {
            overflow:hidden;
            border-radius:5px;
            font-family: "Comic Sans MS", cursive;
        }
        .error  {
            background-color:pink;
            border: 1px solid red;
            padding:10px;
        }
        .correct    {
            background-color:#7AFEC6;
            border: 1px solid green;
            padding:10px;
        }
        .head   {
            min-height:50px;
            max-height:50px;
            border: 1px solid #CCC;
            min-width:100%;
            padding:0px;
            position:absolute;
            min-width:100%;
            top:0px;    left:0px;
            background-image:url(img/topbg.jpg);
            color: #FFF;
        }
        .bottom {
            background-image:url(img/bottombg.jpg);
        }
    </style>

<fieldset>
    <legend><b>Identify the URL</b></legend>
    <div id="fields">
        <form id="form1" name="form1" method="post" action="event.php">
<?php
    if(isset($_POST['submit']))  {
        echo '<input type="text" name="url" id="name" style="width:100%" value="' . $_POST['url'] . '"/>';
    }
    else {
        echo '<input type="text" name="url" id="name" style="width:100%"/>';
    }
?>
            <input type="submit" title="Submit" name='submit' />
        </form>
        
    </div>
    <fieldset>
        <legend><b>Snapshot</b></legend>
        <?php

            include_once("script/dbconnect.php");
            $sql = "select level from scoreboard where uname='" . $_COOKIE[$cookie_name] . "'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result);
            $level = $row['level']; 
            if($level == $SURFIT_LEVEL)
                echo "<h2>Levels Completed.Please Wait for your Results.</h2>";
            else
                echo "<h2>Level : " . $level . "<br />";
                
            if(isset($_POST['submit'])) {
                $sql = "select url from levels where level=" . $level;
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result);
                if(strcmp(trim($row['url']),$_POST['url']) == 0)   {
                   $qry = "update scoreboard set level=level+1 , tme='" . date( "g:i:s" ) . "' where uname='" . $_COOKIE[$cookie_name] . "'";
                   $level = $level + 1;
                   $result = mysqli_query($db,$qry);  

                   $sql = "select level from scoreboard where uname='" . $_COOKIE[$cookie_name] . "'";
                   $result = mysqli_query($db,$sql);
                   $row = mysqli_fetch_array($result);
                   $level = $row['level'];   

                   echo "<div class=\"correct\"><a href=\"event.php\">Click here to Proceed to the Next Level</a></div>";
                }
                else  {
                    echo "<div class=\"error\">Invalid URL<br /></div>";
                    echo "<img src=\"img/level/" . $level . ".JPG\" />";
                }
            }
            else {
                $sql = "select level from scoreboard where uname='" . $_COOKIE[$cookie_name] . "'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result);
                $level = $row['level']; 
                
                echo "<img src=\"img/level/" . $level . ".JPG\" />";
            }

            mysqli_close($db);
        ?>
    </fieldset>
</fieldset>
</body>
</html>
