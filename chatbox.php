<?php
include("config.php");
if(isset($_SESSION['user'])){
?>

<div class='msgs'>
  <?php include("msgs.php");?>
      
	
</div>
<div class="new-msgs">
</div> 
<div class="span10">
    <div class="form-bar">
        <form id="msg_form" class="chat-form">

        <input class="inputext" name="msg" width="100px" size="100" placeholder="Start typing here..."  type="textArea" autocomplete="off"/>



        <button  class="btn-floating btn-large" >Send</button>

        </form>
        <div class="mobile-bar hide-on-large-only" >
            <a href="" class="mentions js-mobile-mentions">26 mentions</a>
        </div>
    </div>
 </div>
 
<?php
}
?>