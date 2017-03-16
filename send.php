<?php
include("config.php");


if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 die("<script>window.location.reload()</script>");
}
if(isset($_SESSION['user']) && isset($_POST['msg'])){
 
 $msg=htmlspecialchars($_POST['msg']);
 $ment=htmlspecialchars($_POST['men']);





 $name=$_SESSION['user'];
 $sender=$_SESSION['user_id'];
  if($msg!=""){
  $sql=$dbh->prepare("INSERT INTO messages (sender,name,msg,posted)  VALUES ('$sender','$name','$msg',NOW())");
  $sql->execute();

  $sqlmention=$dbh->prepare("SELECT  `Message_id` FROM  `messages`  WHERE sender='$sender' ORDER BY  `Message_id` DESC LIMIT 1 ");
  $sqlmention->execute();
  $row=$sqlmention->fetch();

  $messageis=$row['Message_id'];
 }


$mentio = explode(",",$ment);


$arrylen = count($mentio);
if($ment !=""){
for ($x=0; $x<$arrylen; $x++ ){

	$user_id= $mentio[$x];
	   $message_id=$_SESSION['user_id'];
  $mentoer=$dbh->prepare("INSERT INTO mentions (user_id,message_id)  VALUES ('$user_id','$messageis')");


	$mentoer->execute();
}
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
