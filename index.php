<?php
include('config.php');


if(isset($_POST['submit'])){
	
 $email=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 
  $stmt = $dbh->prepare("SELECT user_id,email_address, password from users where email_address='$email' and password='$password'"); 
    $stmt->execute();
	
	
 if($stmt->rowCount()==0){
  echo"<script> window.alert('Wrong username or password');</script>";
   echo"<script> window.location.href='index.php'</script>;";
 
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
   
   
   <div class="span4">
      
	  
	     <div class="hero-unit-3">
                    <div class="alert-index alert-success">
					<h3>Welcome to Ementoring Africa</h3>
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
					
	
                </div>
                </div>
   
   
   
  
  <div class="span6">
  
       <div class="hero-unit-3">
                    <div class="alert-index alert-success">
  
    <div class="container">
        <div class="row-fluid">
  
		<table align="left" width="30%" >
	
    <form method="post" action="">
	
	 
	<div class="control-group">
	<p>Please provide your username and password:</p>
	<tr>
	
	<td>
	
	   <label class="control-label" for="inputPassword">Username / Email :</label>
	
	</td>
	
    	<td>
		
		
		  <div class="controls">
		<input type="text" name="username" placeholder="Username" required="required" />
		
		</div>
		
		</td>
		
		</tr>
		
		</div>
		
			<div class="control-group">
		<tr>
		<td>     <label class="control-label" for="inputPassword">Password:</label> </td>
       	<div class="control"><td> 
		
		<input type="password" name="password" placeholder="Password" required="required" /></td>
		
		</div>
		</tr>
		
		
		</div>
		
	<div class="control-group">
		<tr>
		<td  align="left">
        <button type="submit"  name="submit" class="btn btn-primary ">Log in.</button>
      </td>
	  </tr>
	  
	  </div>
	  
	 
	  
	  
	  
	  
    </form>
	
	
	<div class="control-group">
	  
	  
	  	
<tr>
	  <td  align="left">
        <a href="register.php"> <button  class="btn btn-primary ">Register.</button></a>
      </td>
	  
	  
	  
		<td  align="right">
		<a href="forgot_password.php"> <button  class="btn btn-primary "> Forgot Password? </button> </a>
		</td>
		
	</tr>
	</div>
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
