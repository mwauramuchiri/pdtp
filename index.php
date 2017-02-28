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
    <link rel="stylesheet" href="materialize.css"/>
</head>

<body>
    <main>
        
        <br>
        <br>
        <div class="container">
            <a href="#" class="brand-logo center-align">
                <img  height="50" class="" src="header.png">
            </a>
            <br>
            <br>
            <h4>Welcome to Ementoring Africa</h4>
            <h6 class="secondary-title">
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
            </h6>
            
            <div class="row">
                <form method="post" action="index.php">
                    <div class="row">
                        <div class="container">
                            <div class="col s12 input-field">
                                <p>Please provide your username and password</p>
                            </div>
                            <div class="col s12 input-field">
                                <input type="text" name="username" placeholder="Username" autocomplete="off" id="username" required="required" />
<!--                                <label for="username">Username / Email :</label>-->
                            </div>
                            <div class="col s12 input-field">
                                <input type="password" name="password" placeholder="Password" autocomplete="off" required="required" />
<!--                                <label for="password">Password:</label>-->
                            </div>
                            <div class="col s12 input-field">
                                <button class="btn" type="submit" name="submit">Login</button>
                            </div>
                            <div class="col s12 input-field">
                            <br>
                                <a class="" href="register.php">Register</a>
                                <br>
                                <a class="" href="forgot_password.php" >Forgot password</a>

                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </main>
<!--    <script src="js/index.js"></script>-->
</body>
</html>
