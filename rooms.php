<?php


include("config.php");

	if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
		header("location: index.php");
		exit();
	}
        $session_id=$_SESSION['user_id'];

include("login.php");

?>
<!DOCTYPE html>
<html>
 <head>
 <script type="text/javascript" src="jquery-2.0.0.min.js"></script>
<!--  <script src="//code.jquery.com/jquery-latest.js"></script>-->
  
  
  
<!--  <script src="chat.js"></script>-->
  <link href="main.css" rel="stylesheet"/>
  <link href="materialize.css" rel="stylesheet"/>
<!--  <link href="chat.css" rel="stylesheet"/>-->
<!--  <link href="bootstrap.css" rel="stylesheet"/>-->
<!--  <link href="bootstrap-responsive.css" rel="stylesheet"/>-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php

     $_SESSION['user'] = 'talent';
?>
   
  
  <title>Pass it on </title>
 </head>
 <body>

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
                         <p class="full-name">Gabriel Muchiri</p>
                         <p class="user-name">@mwauramuchiri</p>
                     </div>
                 </div>
                 <br>
                 <div class="chat-info row white-text <?php echo $_SESSION['user']; ?>">
                     <h6 class="center-align title">
                         <?php echo $_SESSION['user']; ?> chat room
                     </h6>
                     <br>
                     <a href="leave.php" class="underline white-text">Leave chat room</a>
                     <div class="bg"></div>
                 </div>
                 <br>
                 <div class="section-bar js-mentions-container">
                     <p class="title">
                         Mentions
                         <span class="badge <?php echo $_SESSION['user']; ?>">new</span>
                     </p>
                     <div class="divider"></div>
                     <div class="data">
                         <ul>
                             <li data-message-id="24">
                                 <a class="user-name">@mwauramuchiri</a>
                                 <span class="text">
                                     I hope you won't have anything going on in
                                     the supermarket.
                                 </span>
                             </li>
                             <li class="divider"></li>
                             <li data-message-id="24">
                                 <a class="user-name">@mwauramuchiri</a>
                                 <span class="text">
                                     I hope you won't have anything going on in
                                     the supermarket.
                                 </span>
                             </li>
                             <li class="divider"></li>
                             <li data-message-id="24">
                                 <a class="user-name">@mwauramuchiri</a>
                                 <span class="text">
                                     I hope you won't have anything going on in
                                     the supermarket.
                                 </span>
                             </li>
                             <li class="divider"></li>
                             <li data-message-id="24">
                                 <a class="user-name">@mwauramuchiri</a>
                                 <span class="text">
                                     I hope you won't have anything going on in
                                     the supermarket.
                                 </span>
                             </li>
                             <li class="divider"></li>
                         
                         </ul>
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
                     <a class="report-link inline" href="">T&C</a>
                 </p>
             </div>
         </div>
         <div class=" col chat-bar no-padding">
             <div class="chat">  
                <div class="chatbox">
                    <?php
                    
//                    $_SESSION['user'] = 'career';
                    
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
 </body>
</html>
