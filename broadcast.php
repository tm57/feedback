<?php
session_start();
session_unset();
session_destroy();
?>

<?php 
  header("Location: feedback_form.php");
  die();
?>