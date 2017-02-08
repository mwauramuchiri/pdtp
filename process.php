<?php


include("config.php");



if(isset($_POST['submit'])){
 $fname=htmlspecialchars($_POST['fname']);
 $sname=htmlspecialchars($_POST['sname']);
 $email=htmlspecialchars($_POST['email']);
 $types=htmlspecialchars($_POST['mentor']);
 $password=htmlspecialchars($_POST['password']);

 $counter= $dbh->prepare("SELECT email_address FROM users WHERE email_address='$email'");
  $counter->execute();  
 if($counter->rowCount()!=0){
  echo"<script > window.alert('Please the email address you used has been registerd has be used');</script>";
 
 

  echo"<script> window.location.href='register.php'</script>;";
 }else{
	 
	
  $sql=("INSERT INTO users (first_name,second_name,email_address,password,user_type) VALUES ('$fname','$sname','$email','$password','$types')");
   $dbh->exec($sql);
   

  echo "<script > window.alert('Thank you for your Registration Please continue');</script>";


header('Location: index.php');
 
 

}
}

?>