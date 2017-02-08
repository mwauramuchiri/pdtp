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
  <script src="//code.jquery.com/jquery-latest.js"></script>
  
  
  
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
  <link href="bootstrap.css" rel="stylesheet"/>
  <link href="bootstrap-responsive.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
   
  
  <title>Pass it on </title>
 </head>
 <body>
 <div class="span12">
 

  <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
  
   
   
   </div>
   </div>
   </div>
   
  
	   
   <div class="span2">
      
	  
	         
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
				<?php if(isset($_SESSION['user'])){
      echo $_SESSION['user'];
     }else{
		 echo "You have not chossen a room";
	 }
	  
	  
	  ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                       
						
						   <li class="active">
                            <a href="rooms.php"><i class="icon-home icon-large"></i>&nbsp;Chats Rooms
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>					
						
						
						
                     
                          <li class="active">
                            <a href="profile.php"><i class="icon-home icon-large"></i>&nbsp;My Profile
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li> 
          	
                    
							  


                    </ul>
                </div>

            </div>
	
	
	
	
	
	
<div class="chat">  
	<div class="span9">	
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
 </body>
</html>
