<?php
include("config.php");



$room=$_SESSION['user'];


    if (empty($_POST['last_id'])) {
        
       // $sql=$dbh->prepare("SELECT * FROM messages where name='$room' and reply IS NULL ");
        
    } else {
        
        $last_id = $_POST['last_id'];
        $sql=$dbh->prepare("SELECT * FROM messages where name='$room' and reply IS NULL and posted > '$last_id'");
        
        $sql->execute();

while($r = $sql->fetch()){

$e = '';
    
$id=$r['sender'];

$sql2=$dbh->prepare("SELECT first_name FROM users where user_id='$id'");	
$sql2->execute();
$na=$sql2->fetch();

$e .= "<div data-message-id='{$r['Message_id']}' class='msg messages' title='{$r['posted']}'>";
$e .= "<div class='chatname'><i class='glyphicon glyphicon-trash'></i>";
$e .= "{$na['first_name']}";
$e .= "{$r['posted']}";

$e .= "</div>";

$e .= "<div class='msgd'><span class='msgc'>{$r['msg']}</span></div> ";

$e .= "<div class='actions'>";
$e .= "<button data-message-id='{$r['Message_id']}' class='reply-btn' >Comment:</button> ";
$e .= "</div>";

echo $e; 

$reply=$dbh->prepare("SELECT * FROM messages where reply='{$r['Message_id']}'");	
$reply->execute();
$rep =$reply->columnCount();
    
if($rep > 0){
	
{
	$reply_id=$rep['sender'];

$sql3=$dbh->prepare("SELECT first_name FROM users where user_id='$reply_id'");	
$sql3->execute();
$sender=$sql3->fetch();

$rep3 =$reply->columnCount();
  
//var_dump($replies);
 $r="<div data-message-id='{$rep['Message_id']}' class='replyy2'>";
 
 $r .= " <div id='chatname'><i class='glyphicon glyphicon-trash'></i>";
 $r .= "<span class='name'>{$sender['first_name']} </span>";
 $r .= "{$rep['posted']} </div>";
 $r .= "<div id='msgd'><span class='msgc'>{$rep['msg']}</span></div></div>";
 echo $r;
}
echo '</div>';
    
}
    }



   // $l++;
    
}
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}
?>
