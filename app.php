<?php
include("config.php");


 $sender=$_SESSION['user_id'];
 $room=$_SESSION['user'];

$sql=$dbh->prepare("SELECT * FROM mentions where user_id='$sender' ");
$sql->execute();
$count=$sql->rowCount();
echo " <a href='mentions.php' class='js-mobile-mentions'> You have :".$count." Mentions</a>";
/*
while($r=$sql->fetch()){

	$rs=$r['message_id'];
$sql2=$dbh->prepare("SELECT * FROM messages where Message_id='$rs' and name='$room' ");
$sql2->execute();
$messages=$sql2->fetch();
$count=$sql2->rowCount()

if( $messages['msg']!=""){

 //echo "<a href='mentions.php'><li class='".$rs."'>{$messages['msg']}</li></a>";

}

}

echo "</ul>";*/
?>
