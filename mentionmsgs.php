<?php
include("config.php");

 $sender=$_SESSION['user_id'];
 $room=$_SESSION['user'];

$sql=$dbh->prepare("SELECT * FROM mentions where user_id='$sender' ");
$sql->execute();



while($w=$sql->fetch()){



$rst=$w['message_id'];
$sql2=$dbh->prepare("SELECT * FROM messages where Message_id='$rst' and name='$room' ORDER BY posted ASC");




$sql2->execute();

while($r = $sql2->fetch()){





$e = '';

$id=$r['sender'];

$sql2=$dbh->prepare("SELECT first_name FROM users where user_id='$id'");
$sql2->execute();
$na=$sql2->fetch();

//            <div data-message-id="14" class='msg messages' title='Title'>
//                <div class='chatname'>
//                    <i class='glyphicon glyphicon-trash'></i>
//                    mwauramuchiri
//                    <span class="msg-date">24th Jan 2017</span>
//                </div>
//                <div class='msgd'>
//                    <span class='msg-data'>New message text trying here</span>
//                </div>
//             </div>

$e .= "<div data-message-id='{$r['Message_id']}' class='msg messages' title='{$r['posted']}'>";
$e .= "<div class='chatname'><i class='glyphicon glyphicon-trash'></i>";
$e .= "{$na['first_name']}";
$e .= "<span class='msg-date'>{$r['posted']}</span>";

$e .= "</div>";

$e .= "<div class='msgd'><span class='msg-data'>{$r['msg']}</span></div> ";

$e .= "<div class='actions'>";
$e .= "<button data-message-id='{$r['Message_id']}' class='reply-btn' >Comment:</button> ";
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
 $r="<div data-message-id='{$replies['Message_id']}' class='reply-text-card'>";

 $r .= " <div class='chatname'><i class='glyphicon glyphicon-trash'></i>";
 $r .= "<span class='name'>{$sender['first_name']} </span>";
 $r .= "<span class='msg-date'>{$replies['posted']}</span></div>";
 $r .= "<div class='msgd'><span class='msg-data'>{$replies['msg']}</span></div></div>";
 echo $r;
}
echo '</div>';

}

   // $l++;




if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}






}
}
?>
