<?php
include("config.php");
if(isset($_SESSION['user'])){
?>
<div class='msgs'>
    <?php include("msgs.php");?>
    <div class="new-msgs">
    </div>
</div>
<form id="msg_form" class="chatbox-action-bottom col s12 l10 white z-depth-3">
    <div class="input-field col s9">
        <input name="msg" class="chat-box-input" type="text"/>
     </div>
    <div class="input-field col s3">
        <button  class="btn-floating center btn-large waves-effect waves-light green"><i class="material-icons">send</i></button>
    </div>
  
</form>
 

<?php
}
?>

