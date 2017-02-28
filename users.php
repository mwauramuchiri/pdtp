<?php
/*$sql="select * from Posts limit 20"; 

$response = array();
$posts = array();
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) 
{ 
$title=$row['title']; 
$url=$row['url']; 

$posts[] = array('title'=> $title, 'url'=> $url);

} 

$response['posts'] = $posts;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);*/

//while($r = $sql->fetch()){
include("config.php");
$usernames=array();
$users=$dbh->prepare("SELECT DISTINCT username,fname,sname,sender FROM messages");
$users->execute();
while($r = $users->fetch()){
	$user=$r['username'];
	$fname=$r['fname'];
	$sname=$r['sname'];
	$se=$r['sender'];
	$usernames[] = array('sen'=> $se,'username'=> $user,'fname'=> $fname,'sname'=> $sname);

}
//$results=$users->fetchAll(PDO::FETCH_ASSOC);

$json=json_encode($usernames);
//echo $json;
$fp = fopen('users.json', 'w');
fwrite($fp, json_encode($usernames));
fclose($fp);

?>

