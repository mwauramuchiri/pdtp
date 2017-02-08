<?php


include("config.php");
if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
		header("location: index.php");
		exit();
	}
        $session_id=$_SESSION['user_id'];


 

$sql2 = "SELECT first_name, second_name, email_address,phone,about_me FROM users where user_id='$session_id'";

    $stmt2 = $dbh->prepare($sql2, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt2->execute();
    $row = $stmt2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
 do{
      $f_name = $row[0];
	   $s_name = $row[1];
	    $email = $row[2];
	    $mobile = $row[3];
	    $about_me = $row[4];
		
    } while ($row = $stmt2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
	


?>
<!DOCTYPE html>
<html>
 <head>
  <script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="chat.js"></script>

  <link href="bootstrap.css" rel="stylesheet"/>
  <link href="bootstrap-responsive.css" rel="stylesheet"/>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
   
  
  <title>Pass it on </title>
 </head>
 <body>
 
 <div class="container">
 <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
  
      <h1><center><img src="header.png"></center></h1>
   
   </div>
   </div>
   </div>
   <div class="span12">
   
   <div class="span2">
      
	  
	         
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                         <h1><img src="pics/msg.jpg" width="50%"> 5</h1>
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
						
						               
							  


                    </ul>
                </div>

            </div>
               
   
    <div class="span6">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
  <thead>
   <tr>
  <td> 
  <h3><?php  echo 'Name:   '. $f_name.'   '.$s_name; ?></h3>
  </td>
  </tr>
  <tr>
   <td>
  <?php  echo'Phone:   '. $mobile; ?>
  </td>
   </tr>
   <tr>
  
  <td>
  <?php  echo'Email:   '. $email; ?>
  </td>
   </tr>
  </thead>

  <tbody>
    <tr>
	<td>About Me</td>
	</tr>
	<tr>
	<td>
	<?php  echo $about_me; ?>

	
	
	
	
	</td>
  </tr>
  
  </tbody>
  
  </table>
  </div>
   
   
   
   
   
   
<div class="span3">
      
	  
	     <div class="hero-unit-3">
                    <div class="alert-index alert-success">
					<h3>My Profile</h3>
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
					
					
					 <div class="profilepic">
	  <img width="100%" height="80%" src="pics/my.jpg">
    </div>
	
	
	<a href="editprofile.php" class="btn btn-success">&nbsp;Edit and Update Profile</a>
	
	
                </div>
                </div>
	 
	
 
   <div class="span6">
 
  </div>
  <div class="span6">
  
  </div>
  
   </div>
  </div>
 </body>
</html>
