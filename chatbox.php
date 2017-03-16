<?php
include("config.php");
if(isset($_SESSION['user'])){
?>

<div class="msgs">
  <?php include("msgs.php");?>
      
	
</div>
<div class="new-msgs">
</div> 
<div class="span10">
        <div class="form-bar">
        <form id="msg_form" class="chat-form row no-margin">

      <input class="inputext" name="msg" placeholder="Start typing here..."  type="text" autocomplete="off"/>
     <button  class="btn-floating btn-large" >Send</button>

        </form>
        <div class="mobile-bar hide-on-large-only row no-margin" >
            <?php include("app.php"); ?>
        </div>
    </div>
</div>
 
<?php
}
?>
