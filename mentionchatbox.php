<?php
include("config.php");
if(isset($_SESSION['user'])){
?>

<div class="msgs23">
  <?php include("mentionmsgs.php");?>


</div>

<?php
}
?>
