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
	

	
	
	if(isset($_POST['save'])){
	
	
 $first_name=htmlspecialchars($_POST['first_name']);
 $second_name=htmlspecialchars($_POST['second_name']);
$phone=htmlspecialchars($_POST['phone']);
$a_me=htmlspecialchars($_POST['about_me']);

 $counter1= $dbh->prepare("UPDATE `users` SET `first_name` = '$first_name', `second_name` = '$second_name', `phone` = '$phone' , `about_me` = '$a_me' WHERE `users`.`user_id` = '$session_id'");
  $counter1->execute();  
  echo"<script> window.location.href='profile.php'</script>;";
	
}
	
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
  
   <img src="header.png">
   
   </div>
   </div>
   </div>
   <div class="span12">
   
   
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
	  <img width="100%" height="80%" src="pics/my.jpeg">
    </div>
                </div>
                </div>
	 
	
  <div class="span6">
  <table>

  <form class="form-horizontal" method="POST" action="<?php $_SERVER['PHP_SELF']?>">
  
  <!---<tr>
  </tr>
  <td></td
  -->
  
                                            
                                            <div class="control-group">
                                                
                                                <div class="controls">
												<tr><td><label class="control-label" for="inputPassword">First name :</label></td><td>
                                                    <input type="text" name="first_name" id="inputPassword" value="<?php  echo $f_name ?>" ></td></tr>
                                                </div>
                                            </div>
											<div class="control-group">
                                              
                                                <div class="controls">
												<tr><td><label class="control-label" for="inputPassword">Second name:</label></td><td>
                                                    <input type="text" name="second_name" id="inputPassword" value="<?php  echo $s_name ?>"></td></tr>
                                                </div>
                                            </div>	
<div class="control-group">
                                               
                                                <div class="controls">
												<tr><td><label class="control-label" for="inputPassword">Email Address :</label></td><td>
                                                    <input type="text" name="email_address" id="inputPassword" value="<?php  echo $email?>" readonly></td></tr>
                                                </div>
                                            </div>

                                         <div class="control-group">
                                               
                                                <div class="controls">
												<tr><td><label class="control-label" for="inputPassword">Phone :</label></td><td>
                                                    <input type="text" name="phone" id="inputPassword" value="<?php  echo $mobile ?>" placeholder="Phone">
													</td></tr>
                                                </div>
                                            </div>	
											<div class="control-group">
                                               
                                                <div class="controls">
												<tr><td><label class="control-label"  for="inputPassword">About Me:</label></td><td>
                                                    <textarea cols="100" rows="10" name="about_me"> <?php  echo $about_me; ?> </textarea>
													</td></tr>
                                                </div>
                                            </div>											
											
											
											
                    
											
																				
                                          

                                            <div class="control-group">
                                                <div class="controls">
                                     <tr><td></td><td>
                                                    <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save User</button>
                                                </td></tr>
												</div>
                                            </div>
                                        </form>
  </table>
   </div>
  </div>
 </body>
</html>
