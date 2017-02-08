<?php
include('config.php');


if(isset($_POST['submit'])){
	
 $email=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 
  $stmt = $dbh->prepare("SELECT user_id,email_address, password from users where email_address='$email' and password='$password'"); 
    $stmt->execute();
	
	
 if($stmt->rowCount()==0){
  echo"<script> window.alert('Wrong username or password');</script>";
  
 
 }else{
	 $result=$stmt->fetch();
	 
	   $_SESSION['user_id']=$result['user_id'];
	  	   
	   
	   
 
header('Location:rooms.php');
 }
 }




?>





<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pass it on</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  
  
    <link href="bootstrap.css" rel="stylesheet"/>
  <link href="bootstrap-responsive.css" rel="stylesheet"/>

  </head>

<body>

   <div class="container">
        <div class="row-fluid">





  
  
  
  <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
  
  <h1> <center><img src="header.png"></center></h1>
   
   </div>
   </div>
   </div>
  
  <div class="span6">
    <div class="container">
        <div class="row-fluid">
  
	
	   
	<table align="center" >
	
    <form method="post" action="">
	
	
	
	<div class="control-group">
	<tr>
	
	<td>
	
	   <label class="control-label" for="inputPassword">Enter Your Email :</label>
	
	</td>
	
    	<td>
		
		
		  <div class="controls">
		<input type="email" name="email" placeholder="email" required="required" />
		
		</div>
		
		</td>
		
		</tr>
	  <tr>
	  <td colspan="2" align="center">
        <a href="register.php"> <button   name="forgot_password"class="btn btn-primary ">Submit.</button></a>
      </td>
	  </tr>
	  	<div class="control-group">
    </form>
	
	
	
	
	</table>
	
	
	</div>
	</div>
	</div>

  
    <script src="js/index.js"></script>
</div>
</div>
</div>
</body>
</html>
