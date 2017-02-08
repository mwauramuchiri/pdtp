<?php
include("config.php");
$room=$_SESSION['user'];
$sql=$dbh->prepare("SELECT * FROM messages where name='$room' AND reply='' ");
$sql->execute();
while($r=$sql->fetch()){

$id=$r['sender'];

$sql2=$dbh->prepare("SELECT first_name FROM users where user_id='$id'");	
$sql2->execute();
$na=$sql2->fetch();


//echo json_encode($r);
	
 $e = "<div  class='msg' title='{$r['posted']}'>";
 $e .= "<div id='chatname'><i class='glyphicon glyphicon-trash'></i>";
 $e .= "<span class='name'>{$na['first_name']} </span>~</div>";
 $e .= "{$r['posted']}<br>";
 $e .= "<div id='msgd'><span class='msgc'>{$r['msg']}</span></div>";
 $e .= "</div><div class='actions'>";

$e .= "<button data-message-id='{$r['Message_id']}'  id='reply_btn' name='msg_reply' class='reply-btn' >reply</button> </div>";
 
 echo $e;
 $reply=$dbh->prepare("SELECT * FROM messages where reply='{$r['Message_id']}'");	
$reply->execute();
$rep =$reply->columnCount();
if($rep >0 ){
while($replies=$reply->fetch()){
	$reply_id=$replies['sender'];

$sql3=$dbh->prepare("SELECT first_name FROM users where user_id='$reply_id'");	
$sql3->execute();
$sender=$sql3->fetch();

 $r = "<blockquote><blockquote><blockquote><div  class='msg' title='{$replies['posted']}'>";
 $r .= "<div id='chatname'><i class='glyphicon glyphicon-trash'></i>";
 $r .= "<span class='name'>{$sender['first_name']} </span>~</div>";
 $r .= "{$replies['posted']}<br>";
 $r .= "<div id='msgd'><span class='msgc'>{$replies['msg']}</span></div></blockquote></blockquote></blockquote>";
 echo $r;
}}

 }
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}
?>
