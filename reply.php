<?php
include("config.php");
if(isset($_SESSION['user'])){
?>
 
 <form id="msg_form">
 
  <input name="msg" width="100px" size="100"  type="text"/>
 
  
 
  <button  class="btn">Send</button>
  
 </form>
 
 
 
<?php
}
?>