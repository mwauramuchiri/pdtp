<?php



if(isset($_POST['name']) && !isset($display_case)){
 $name=htmlspecialchars($_POST['name']);
 $username=htmlspecialchars($_POST['username']);
 

  $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
  $sql->execute(array($name));
  $_SESSION['user']=$name;
 
}elseif(isset($display_case)){
 
	 
	 
	 
?>
<main>
    <!--
    <div>
     <a style="right: 20px;bottom: 20px;position: absolute;cursor: pointer;" href="leave.php"><button class="btn btn-primary btn-block btn-large">Logout</button></a>
    </div>
    -->
    <br>
    <div class="nav">
        <a class="btn float-right" href="leave.php">Logout</a>

        <a class="float-right account-icon" href="profile.php">
            <img src="pics/THINKING.jpg">
        </a>
    </div>
    <div class="content container">
            <br><br>
        <p>
            We believe that these vices can be surmounted if only
            Kenyan youth can have access to credible, honest and supporting mentors.
            This is what we seek to achieve through our various programs.To date, a
            total of 4,176 youth have been impacted ...and still counting!.
        </p>
            <br><br>
    </div>
     <div class="card-container">
         <div class="section-card talent-card">
             <div class="card-info">
                 <p class="section-title">Talent</p>
                 <br><br><br>
                 <p class="center-align">
                     <a class="btn white black-text">Enter Chat room</a>
                 </p>
                 <br><br><br>
             </div>
             <div class="random-chat-section">
                <div data-message-id="14" class='msg messages' title='Title'>
                <div class='chatname'>
                    <i class='glyphicon glyphicon-trash'></i>
                    mwauramuchiri
                    <span class="msg-date">24th Jan 2017</span>
                </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
                 <div data-message-id="14" class='msg messages' title='Title'>
                    <div class='chatname'>
                        <i class='glyphicon glyphicon-trash'></i>
                        mwauramuchiri
                        <span class="msg-date">24th Jan 2017</span>
                    </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
             </div>
             <img src="pics/guitar-music.jpg">
         </div>
         <div class="section-card career-card">
             <div class="card-info">
                 <p class="section-title">Career</p>
                 <br><br><br>
                 <p class="center-align">
                     <a class="btn white black-text">Enter Chat room</a>
                 </p>
                 <br><br><br>
             </div>
             <div class="random-chat-section">
                <div data-message-id="14" class='msg messages' title='Title'>
                    <div class='chatname'>
                        <i class='glyphicon glyphicon-trash'></i>
                        mwauramuchiri
                        <span class="msg-date">24th Jan 2017</span>
                    </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
                 <div data-message-id="14" class='msg messages' title='Title'>
                <div class='chatname'>
                    <i class='glyphicon glyphicon-trash'></i>
                    mwauramuchiri
                    <span class="msg-date">24th Jan 2017</span>
                </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
             </div>
             <img src="pics/black-guy-3.jpg">
         </div>
         <div class="section-card entrep-card">
             <div class="card-info">
                 <p class="section-title">Entreprenuership</p>
                 <br><br><br>
                 <p class="center-align">
                     <a class="btn white black-text">Enter Chat room</a>
                 </p>
                 <br><br><br>
             </div>
             <div class="random-chat-section">
                <div data-message-id="14" class='msg messages' title='Title'>
                <div class='chatname'>
                    <i class='glyphicon glyphicon-trash'></i>
                    mwauramuchiri
                    <span class="msg-date">24th Jan 2017</span>
                </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
                 <div data-message-id="14" class='msg messages' title='Title'>
                    <div class='chatname'>
                        <i class='glyphicon glyphicon-trash'></i>
                        mwauramuchiri
                        <span class="msg-date">24th Jan 2017</span>
                    </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
                 <div data-message-id="14" class='msg messages' title='Title'>
                    <div class='chatname'>
                        <i class='glyphicon glyphicon-trash'></i>
                        mwauramuchiri
                        <span class="msg-date">24th Jan 2017</span>
                    </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
             </div>
             <img src="pics/pexels-photo.jpg">
         </div>

         <div class="section-card volunteer-card">
             <div class="card-info">
                 <p class="section-title">Volunteerism</p>
                 <br><br><br>
                 <p class="center-align">
                     <a class="btn white black-text">Enter Chat room</a>
                 </p>
                 <br><br><br>
             </div>
             <div class="random-chat-section">
                <div data-message-id="14" class='msg messages' title='Title'>
                <div class='chatname'>
                    <i class='glyphicon glyphicon-trash'></i>
                    mwauramuchiri
                    <span class="msg-date">24th Jan 2017</span>
                </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
                 <div data-message-id="14" class='msg messages' title='Title'>
                <div class='chatname'>
                    <i class='glyphicon glyphicon-trash'></i>
                    mwauramuchiri
                    <span class="msg-date">24th Jan 2017</span>
                </div>
                    <div class='msgd'>
                        <span class='msg-data'>New message text trying here</span>
                    </div>
                 </div>
             </div>
             <img src="pics/watoto.jpg">
         </div>
     </div>

    <!--
     <form action="rooms.php" method="POST">
      <div>Please select your area of interest:
      <input type="hidden" name="username" value="<?php //echo  $_SESSION['user_id'];  ?>">
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
    -->
    <?php

    }
    ?>

</main>
