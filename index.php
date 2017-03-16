<?php
include('config.php');

 $errors=array();
 $fields=array();
if(isset($_POST['submit'])){
	
 $email=htmlspecialchars($_POST['username']);

 $fields['username']=$email;
  // echo"<script> alert('.$email.')</script>;";
 $password=htmlspecialchars($_POST['password']);
 $fields['password']=$password;

    $stmt = $dbh->prepare("SELECT user_id,email_address, password from users where email_address='$email'");
    $stmt->execute();


 if($stmt->rowCount() >0){


    while($info=$stmt->fetch()){


      if ($password != $info['password']) {
                    //passwords don't match
                    $errors['password']='This password is incorrect. Check and type again';

                    //redisplay the form
                    //echo"<script> window.location.href='index.php'</script>;";
                    }else{



                     $_SESSION['user_id']=$info['user_id'];



 
                      header('Location:rooms.php');
                    }

    }
 }else{
$errors['username']="Username does not exist";
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
                <img width="100%"class="" src="header.jpg">
            </a>
            <br>
            <br>
            <h4>Welcome to "PASS IT ON" Ementoring Africa</h4>
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
                                <input type="text" name="username" placeholder="Username" autocomplete="off"  id="username" value="<?php echo isset($fields['username'])? $fields['username']:''?>" required="required" />
                                  <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['username'])? $errors['username']:'';?></span>
                            </div>
                            <div class="col s12 input-field">
                                <input type="password" name="password" placeholder="Password" autocomplete="off"  value="<?php echo isset($fields['password'])? $fields['password']:''?>" required="required" />
                             <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['password'])? $errors['password']:'';?></span>
                            </div>
                            <div class="col s12 input-field">
                                <button class="btn" type="submit" name="submit">Login</button>
                            </div>
                            <div class="col s12 input-field">
                            <br>
                                <a class="" href="register.php">Register</a>
                                <br>
                                <a class="" href="forgot_password.php" >Forgot password?</a>

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
