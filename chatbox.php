<?php
include("config.php");
if(isset($_SESSION['user'])){
?>
 <div class='headed'>Welcome to Pass it on <u>
 <?php  echo $_SESSION['user'];   ?></u> chat room 
	  
	  
	  </div>
 <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="logout.php"><button class="btn btn-primary btn-block">Leave Chat room</button></a>
 <div class='msgs'>
  <?php include("msgs.php");?>
     <div class="new-msgs">
     </div>
 </div>
 <div class="span10">
 <form id="msg_form">
 
  <input class="inputext" name="msg" width="100px" size="100"  type="textArea"/>
 
  
 
  <button  class="btn" >Send</button>
  
 </form>
 
 </div>
 
<?php
}
?>