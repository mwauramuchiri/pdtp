<?php
include("config.php");
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 die("<script>window.location.reload()</script>");
}
if(isset($_SESSION['user']) && isset($_POST['msg'])){
 
 $msg=htmlspecialchars($_POST['msg']);

 $name=$_SESSION['user'];
 $sender=$_SESSION['user_id'];
  if($msg!=""){
  $sql=$dbh->prepare("INSERT INTO messages (sender,name,msg,posted)  VALUES ($sender,'$name','$msg',NOW())");
  $sql->execute();
 }
}


if(isset($_SESSION['user']) && isset($_POST['msg2'])){
	
$msg2=htmlspecialchars($_POST['msg2']);
$messageid=htmlspecialchars($_POST['messageid']);
 $name=$_SESSION['user'];
 $sender=$_SESSION['user_id'];
 
 

  if($msg2!=""){
  $sql=$dbh->prepare("INSERT INTO messages (sender,name,msg,reply,posted)  VALUES ($sender,'$name','$msg2','$messageid',NOW())");
  $sql->execute();
 }
}




?>
