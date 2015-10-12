<?php
function reject_blank_form(){
  global $_POST;
  $field_set = 0;
  foreach ($_POST as $key => $value) {
    if (isset($_POST[$key])) {
      $field_set++;

    }
  }
  if ($field_set < 80) {
    die("Submission has been rejected because responses submitted are too few<br>
    Please may you complete at least 80 questions so that we can make meaningful conclusions of the research
    <br>Thank you<br><a href='feedback_form.php'>Form<a>");
  }
}
reject_blank_form();
?>