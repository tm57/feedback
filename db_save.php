<?php
session_start();
if(strcmp($_SESSION["einbahnstrasse"], "done") == 0){
  die("You have already submitted the form using this machine. <br><a href='index.php'>Start Page</a><br><a href='broadcast.php'>New Form Submission</a>");
}
require_once 'model/db_save.class.php';
$save = new db_save($_POST, "thank-you");
$save->feedback_save();

?>