<?php
include("config.php");
$room=$_SESSION['user'];


    if (empty($_REQUEST['last_id'])) {
        
        $sql=$dbh->prepare("SELECT * FROM messages where name='$room' and reply IS NULL ");
        
    } else {
        
        $last_id = $_REQUEST['last_id'];
        $sql=$dbh->prepare("SELECT * FROM messages where name='$room' and reply IS NULL and Message_id > '$last_id'");
        
    }

$sql->execute();

while($r = $sql->fetch()){

$e = '';
    
$id=$r['sender'];

$sql2=$dbh->prepare("SELECT first_name FROM users where user_id='$id'");	
$sql2->execute();
$na=$sql2->fetch();

$e .= "<div data-message-id='{$r['Message_id']}' class='msg' title='{$r['posted']}'>";
$e .= "<div class='chatname'>";
$e .= "{$na['first_name']} ~ ";
$e .= "</div>";
$e .= "<span class='msg-date'>{$r['posted']}</span>";


$e .= "<div class='msg-data'>{$r['msg']}</div> "; 

$e .= "<div class='actions'>";
$e .= "<a data-message-id='{$r['Message_id']}' class='reply-btn' >Comment</a> ";
$e .= "</div>";

echo $e; 

$reply=$dbh->prepare("SELECT * FROM messages where reply='{$r['Message_id']}'");	
$reply->execute();
$rep =$reply->columnCount();
    
if($rep > 0){
	
while($replies=$reply->fetch()){
	$reply_id=$replies['sender'];

$sql3=$dbh->prepare("SELECT first_name FROM users where user_id='$reply_id'");	
$sql3->execute();
$sender=$sql3->fetch();

$rep3 =$reply->columnCount();
  
//var_dump($replies);
 $r ="<div data-message-id='{$replies['Message_id']}' class='reply-text-card'>";	
 
 $r .= " <div class='chatname'><i class='glyphicon glyphicon-trash'></i>";
 $r .= "<span class='name'>{$sender['first_name']} </span></div>";
$e .= "<span class='msg-date'>{$replies['posted']}</span>";
 $r .= "<div id='msg-data'><span class='msgc'>{$replies['msg']}</span></div></div>";
 echo $r;
}
echo '</div>';
    
}

//    $l++;
    
}
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}
?>
