<?php



if(isset($_POST['name']) && !isset($display_case)){
 $name=htmlspecialchars($_POST['name']);
 $username=htmlspecialchars($_POST['username']);
 

  $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
  $sql->execute(array($name));
  $_SESSION['user']=$name;
 
}elseif(isset($display_case)){
 
	 
	 
	 
?>

<div>
 <a style="right: 20px;bottom: 20px;position: absolute;cursor: pointer;" href="leave.php"><button class="btn btn-primary btn-block btn-large">Logout</button></a>
</div>
<div id="content">
 We believe that these vices can be surmounted if only Kenyan youth can have access to credible, honest and supporting mentors. This is what we seek to achieve through our various programs.To date, a total of 4,176 youth have been impacted ...and still counting!.<br/><br/>
 </div>
 <form action="rooms.php" method="POST">
  <div>Please select your area of interest:  
  <input type="hidden" name="username" value="<?php echo  $_SESSION['user_id'];  ?>">
  <select name="name" required>
	 
	   <option></option>
	   	   
	   <option value="Talentprenuership"> Talentprenuership </option>
	   <option value="Technology">Technology</option>
	   <option value="Career">Career</option>
	   <option value="Volunteerism">Volunteerism</option>
       </select>
  
  
  
  </div>
  <div class="span2">
  <button  style="center:0px;"  class="btn btn-primary btn-block">Enter </button>
  </div>
 </form>
<?php
 
}
?>
