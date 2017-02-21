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
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	
 <script type="text/javascript" src="jquery-2.0.0.min.js"></script>
 <script type="text/javascript" src="chat.js"></script>
  
  <link href="materialize.css" rel="stylesheet"/>
  <link href="main.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
  
  <title>Pass it on </title>
 </head>
 <body>
     <main  id="Cont">
         <!-- Page Layout here -->
    <div class="row h100">

      <div class="col s12 l2 grey darken-1 h100 hide-on-med-and-down">
          
             <ul class="side-bar">
                 <li class="logo">
                    <img class="logo" src="ema%20logo-small-01.png" width="100%"/>
                 </li>
             <br>
             <br>
                <?php 
                 if(isset($_SESSION['user'])){
                    echo '<li class="">';
                    echo $_SESSION['user'];
                    echo '</li>';

                }else{

                    echo '<li class="card red lighten-4">';
                    echo "<span class='white-text'>You have not chossen a room</span>";
                    echo '</li>';
                 }

                ?>

                <li>
                    <a class="white-text" href="logout.php">Chat Rooms</a>
                 </li>

                <li>
                    <a class="white-text" href="profile.php">My Profile</a>
                 </li>

             </ul>

      </div>

      <div class="col s12 l10 h100 grey lighten-5 no-padding">
          
        <div class="mat-chat-cont scroll-overflow"> 

            <div class="navbar-fixed hide-on-large-only">
                <nav>
                    <div class="nav-wrapper blue-grey darken-3">
                        <ul class="left">
                            <li><a href="logout.php" class=""><i class="material-icons">&#xE5C4;</i></a></li>
                        </ul>
                        <a href="#!" class="brand-logo ">
                            <img class="logo" src="ema%20logo-small-01.png" height="64px"/>
                        </a>
                        <ul class="right">
                            <li><a href="#!"><i class="material-icons">&#xE8E1;</i></a></li>
                            <li><a href="profile.php"><i class="material-icons">&#xE853;</i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row hide">
                <br>
                <div class="col s12 m4">
                    <a href="logout.php" class="btn btn-flat">Leave Chat room</a>
                </div>
                <div class="col s12 m4">
                    <h5 class="title">Pass it on chat room</h5>
                </div>
            </div> 
            <div class="chatbox ">

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

    </div>
         
     </main>
 </body>
</html>
