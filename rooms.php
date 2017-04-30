<?php


include("config.php");

	if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
		header("location: index.php");
		exit();
	}


   $session_id=$_SESSION['user_id'];

	$sql3=$dbh->prepare("SELECT * FROM users where user_id='$session_id'");
$sql3->execute();

$sender=$sql3->fetch();

include("login.php");

?>
<!DOCTYPE html>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script type="text/javascript" src="jquery-2.0.0.min.js"></script>
 <script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--  we could be madness HQ of this world-->
  
  
 <script src="chat.js"></script>
  <link href="main.css" rel="stylesheet"/>
  <link href="materialize.css" rel="stylesheet"/>
<!--  <link href="chat.css" rel="stylesheet"/>-->
<!--  <link href="bootstrap.css" rel="stylesheet"/>-->
<!--  <link href="bootstrap-responsive.css" rel="stylesheet"/>-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
  
  <title>Pass it on </title>
 </head>
 <body>
  <?php

//     $_SESSION['user'] = 'entreprenuership';
     
     if(isset($_SESSION['user'])) {
?>

     <main class="row chat-dom">
         <div class=" col chat-side-nav hide-on-med-and-down no-padding">
             <div class="main">
                 <div class="user-info row">
                     <div class="col no-padding">
                         <a class="account-icon">
                             <img src="pics/THINKING.jpg">
                         </a>
                     </div>
                     <div class="col no-padding">
                         <p class="full-name"><?php echo $sender['first_name']."  ".$sender['second_name']; ?></p>
                         <p class="user-name"><?php echo $sender['email_address']; ?></p>
                     </div>
                 </div>
                 <br>
                 <div class="chat-info row no-margin white-text <?php echo $_SESSION['user']; ?>">
                     <h6 class="center-align title">
                         <?php echo $_SESSION['user']; ?> chat room
                     </h6>
                     <br>

                     <button class="btn"><a href="logout.php" >Leave chat room</a></button>

                     <div class="bg"></div>
                 </div>
                 <br>
                 <div class="section-bar js-mentions-container">
                     <p class="title">
                         <span class="leave">
                             Notifications
                         </span>
                         <span class="badge <?php echo $_SESSION['user']; ?>"></span>
                     </p>
                     <div class="divider"></div>
                     <div class="data">
                         <ol>
                             <div class="me">
                                 <?php

                                   if(isset($_SESSION['user'])){
                                       include("app.php");
                                   }else{
                                       $display_case=false;
                                   }
                                 ?>

                             </div>
                         </ol>
                     </div>
                 </div>
             </div>
             <div class="footer">
<!--                 <a class="center-align" href="logout.php">Log out</a>-->
                 <p class=" footer-text inline center-align">
                      <a class="report-link inline" href="">Report abuse</a>
                     |
                     <a class="report-link inline" href="">About</a>
                     |
                     <a class="report-link inline" href="">T & C</a>
                 </p>
             </div>
         </div>
<!--
            <div class="mention-bar">
                <?php //include("app.php"); ?>
            </div>
-->
         <div class=" col chat-bar no-padding">
             <div class="chat">  
                 <div class="header hide-on-large-only">
                     <a class='dropdown-button right grey-text text-darken-4' href='#' data-activates='dropdown1'>
                         <i class="material-icons">more_vert</i>
                     </a>
                     <a class="account-icon right">
                         <img src="pics/THINKING.jpg">
                     </a>
                     <ul id='dropdown1' class='dropdown-content'>
<!--
                         <li><a href="#!">one</a></li>
                         <li><a href="#!">two</a></li>
-->
                         <li class="divider"></li>
                         <li><a href="logout.php" >Leave chat room</a></li>
                     </ul>
                 </div>
                 <div class="chatbox">
                     <?php
                           if(isset($_SESSION['user'])){
                               include("chatbox.php");
                           }else{
                               $display_case=true;
                               include("login.php");
                           }
                    ?>
                 </div>
             </div>
         </div>
     </main>
     <?php

        } else {

            $display_case=true;

            include("login.php");
        }

        ?>
     <script type="text/javascript" src="materialize.min.js"></script>
     <script>
         $('.dropdown-button').dropdown({
             inDuration: 300,
             outDuration: 225,
             constrainWidth: false, // Does not change width of dropdown to that of the activator
             hover: false, // Activate on hover
             gutter: 0, // Spacing from edge
             belowOrigin: false, // Displays dropdown below the button
             alignment: 'right', // Displays dropdown with edge aligned to the left of button
             stopPropagation: false // Stops event propagation
         });
     </script>
 </body>
</html>
