<?php
include("config.php");
echo "<div class='ouser'>online Users</div>";
$sql=$dbh->prepare("SELECT name FROM chatters");
$sql->execute();
while($r=$sql->fetch()){
 echo "<div class='user'>{$r['name']}</div>";
}
?>
