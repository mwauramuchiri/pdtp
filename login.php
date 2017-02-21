<?php



if(isset($_POST['name']) && !isset($display_case)){
 $name=htmlspecialchars($_POST['name']);
 //$username=htmlspecialchars($_POST['username']);
 

  $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
  $sql->execute(array($name));
  $_SESSION['user']=$name;
 
}elseif(isset($display_case)){
 
	 
	 
	 
?>

<div class="fixed-action-btn">
 <a class="btn" href="leave.php">Logout</a>
</div>
<div id="content" class="row">
    <div class="col s8 push-s2">
        <div class="container">
            <p class="title-login-text">
                We believe that these vices can be surmounted if only Kenyan youth can have access to credible, honest and supporting mentors. 
                This is what we seek to achieve through our various programs.To date, a total of 4,176 youth have been impacted ...and still counting!.
            </p>
            <br>
            
            <form action="rooms.php" method="POST">
                <div class="row">
                    <p>
                        Please select your area of interest:  
                    </p>
                    <div class="col s12 input-field">
                        <input type="text" class="hide" name="name" value="<?php echo $_SESSION['user_id'] ?>"/>
                    </div>
                    <div class="col s12 input-field">
                        <select name="name" required class="browser-default">

                            <option disabled>Choose a room</option>
                            
                            <option value="Talentprenuership"> Talentprenuership </option>
                            <option value="Technology">Technology</option>
                            <option value="Career">Career</option>
                            <option value="Volunteerism">Volunteerism</option>
                            <label>Choose a room</label>
                        </select>
                    </div>
                </div>
                <div>
                    <button class="btn">Enter </button>
                </div>
            </form>
        </div>
    </div>
    <br>
    
 </div>
<?php
 
}
?>
