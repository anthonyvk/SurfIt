# SurfIt
Surf-IT - is a web application designed to organize online event for Maaya 2014 event , organized by PESIT - Bangalore South Campus. Adobe Dreamweaver Spry menu plugin  , PHP is used in developing  this application .

*********************************************************************

# The Authors for this application are :  <br />
* Anthony vinay kumar S -	anthony_vinay_kumar_1992_@_gmail_.com <br />
* Harish G - hhg_sharish_@_gmail.com  <br />
*(remove underscores in emailid)*

You are allowed to redistribute this application by retaining 
this license information. For further details and use of application 
you can contact the above mentioned mail id.

Acknowledgement to the following contributors . Surf-IT Team :) : 
Harish G , Ashwini B , Varsha B , Dechamma , Hema R , Mandar K , 
Prasad Kumar , Prasad A , Soumya P , Siddeshi C.R , Bharath G , Anthony VK (a.k.a Ant)

Surf-It is an Online event , where the participant will be given the 
Snapshot of a website , in which the participant has to Identify the 
Website’s Address by using a search Engine.

*********************************************************************
## Please send your Github ID or email-id to **Anthony** via email to add to collaborators list , to allow pushing changes.
*********************************************************************

## Follow these instructions to use this code :

1. Clone this repository by 
``git clone https://github.com/anthonyvk/SurfIt.git``

2. Create a new branch
``git branch <branch name>``

3. Checkout to that branch
``git checkout <branch name>``

4. Do your changes , modify the code as per the requirements.
5. After the end of event kindly commit the changes and push
  * ``git add .``  **(see the . dot)** <br />
  * ``git commit -m 'Meaningful message'`` <br />
  * ``git push origin <branch name>`` <br />

<branch name> - A meaning full branch name denoting the college and event name . example 'PESITBSC-Esperanza2k15' .

*********************************************************************
# Description for the files and directories are as follows :  <br />

* index.htm - 
is the starting page which contains navigation to various 
pages.

* register.php - 
Page where the participants must register with the details to get 
login credentials to the event.

* start.php -
Login page which navigates to the event page (event.php) when the 
participant logs in.

* event.php -
This page contains the snapshot of images from '/img/level' folder 
and the text field to allow user to input the website URL.
The image names in the folder '/img/level' must be based on the level 
number with the extension '.JPG'.

* leaderboard.php -
This page shows the ranking and progress of the user. The topmost 
user is the winner (of that rank order) in case of a tie.

* /script/dbconnect.php -
Configuration script for database connection. 
Modify $SURFIT_LEVEL to customize the number of levels in event.

* SpryAssets -
This folder contains javasript files for the Spry menu Adobe plugin.

* script -
This folder contains script for connecting with the database and the 
database schema and dump files.

* img - 
This folder contains all images.

* img/level -
Contains all the website snapshots. The images filename must be based 
on the level , with the extension '.JPG'. You can customize the 
'event.php' and database values to suit the custom filetypes.
*********************************************************************
