<?php
require_once 'question.class.php';
include_once 'sections.inc';
$form = new Question;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Collection Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="margin-top:70px">
<div class="container">


<div class="container" >
<h1>SECTION A: SOCIO-DEMOGRAPHIC INFORMATION</h1>
<form role="form" method="POST" action="auto-table.php" >
<table class="table table-stripped table-bordered">
  <tr>
    <td>1</td>
    <td>Were you born?</td>
    <input type="text" value="Were you born?" name="q1" hidden/>
    <td>
    <div class="form-group">
      <div class="radio">
      <label><input type="radio" name="AAA1" value="Male">Male</label>
      </div>
    </div>
    <div class="form-group">
      <div class="radio">
      <label><input type="radio" name="AAA1" value="Female">Female</label>
      </div>
    </div>

    </td>
  </tr>

   <tr>
    <td>2</td>
    <input type="text" value="Age in Years" name="q2" hidden/>
    <td>Age in Years</td>
    <td>
    <div class="form-group">
     
      <label><input type="text" name="AAA2"></label>
    </div>
    </td>
  </tr> 

  <tr>
    <td>3</td>
    <td>Marital Status</td>
    <input type="text" name="q3" value="Marital Status" hidden>
    <td>
    <div class="form-group">
      <select class="form-control" name="AAA3">
        <option>Married</option>
        <option>Single</option>
        <option>Maried Traditionally</option>
        <option>Cohabitating</option>
        <option>Divorced</option>
        <option>Seperated</option>
        <option>Widowed</option>
  </select>
</div>
    </td>
  </tr>

     <tr>
    <td>4</td>
    <td>Home Country in Africa</td>
    <input type="text" name="q4" value="Home Country in Africa" hidden>
    <td>
    <div class="form-group">
     
      <label><input type="text" name="AAA4" placeholder="e.g Zimbabwe"></label>
    </div>
    </td>
  </tr>

   <tr>
    <td>5</td>
    <td>Migration Status in current country</td>
    <input type="text" name="q5" value="Migration Status in current country" hidden>
    <td>
    <div class="form-group">
      <select class="form-control" name="AAA5">
        <option value="">Migrant(Naturalized)</option>
        <option>Migrant(Permanent Resident)</option>
        <option>Migrant(Undocumented)</option>
        <option>Refugee</option>
        <option>Visitor</option>
        <option>Student</option>
        <option>Widowed</option>
        <label><input type="text" name="AAA5A" placeholder="Other" ></label>

  </select>
</div>
    </td>
  </tr>

     <tr>
    <td>6</td>
    <td>How long have you been here?(Please specify in months)</td>
    <input type="text" name="q6" value="How long have you been here?(Please specify in months)" hidden>
    <td>
    <div class="form-group">
     
      <label><input type="text" name="AAA6"></label>
    </div>
    </td>
  </tr>
    
  <tr>
    <td>7</td>
    <td>Have you ever attended school?(If no , skip to 9)</td>
    <input type="text" name="q7" value="Have you ever attended school?(If no , skip to 9)" hidden>
    <td>
    <div class="form-group">
      <div class="radio">
      <label><input type="radio" name="AAA7" value="Yes">Yes</label>
      </div>
    </div>
    <div class="form-group">
      <div class="radio">
      <label><input type="radio" name="AAA7" value="No">No</label>
      </div>
    </div>

    </td>
  </tr>
     <tr>
    <td>8</td>
    <td>What is the highest level of education you have had?</td>
    <input type="text" name="q8" value="What is the highest level of education you have had?" hidden>
    <td>
    <div class="form-group">
      <select class="form-control" name="AAA8">
        <option>Some Primary</option>
        <option>Primary Completed</option>
        <option>Some High School(Secondary)</option>
        <option>High School Completed</option>
        <option>Tertiary</option>
        <option>No Response</option>
  </select>
</div>
    </td>
  </tr>

      <tr>
    <td>9</td>
    <td>Were you working before you came here?</td>
    <input type="text" value="Were you working before you came here?" name="q9" hidden/>
    <td>
    <div class="form-group">
      <select class="form-control" name="AAA9">
        <option>Working</option>
        <option>Casualy Employed</option>
        <option>Unemployed</option>
        <option>Never worked in my life</option>
  </select>
</div>
    </td>
  </tr>

    <tr>
    <td>10</td>
    <td>If you were working , what kind of work did you do?</td>
    <input type="text" value="If you were working , what kind of work did you do?" name="q10" hidden/>
    <td>
    <div class="form-group">
      <select class="form-control" name="AAA10">
        <option value="">Professional</option>
        <option>Own formal Business</option>
        <option>Informal Business</option>
        <option>Office worker</option>
        <option>Semi-skilled worker</option>
        <option>Unskilled/manual worker</option>
        <label><input type="text" name="AAA10A" placeholder="Other, Please specify" </label>

  </select>
</div>
    </td>
  </tr>

  <tr>
    <td>11</td>
    <input type="text" value="In your home country, did you have any of the following problems?" name="q11" hidden/>
    <td>In your home country, did you have any of the following problems?</td>
    <td>
      <div class="checkbox">
      <label><input type="checkbox" name="AAA11[]" value="Money Problems">Money Problems</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="AAA11[]" value="Health Problems">Health Problems</label>
    </div>
    <div class="checkbox ">
      <label><input type="checkbox" name="AAA11[]" value="Conflict with family/partner">Conflict with family/partner</label>
    </div>
    <div class="checkbox ">
      <label><input type="checkbox" name="AAA11[]" value="Problem with authorities(Police etc)" >Problem with authorities(Police etc)</label>
    </div>
    <div class="checkbox ">
      <label><input type="checkbox" name="AAA11[]" value="Racism" >Racism</label>
    </div>
     <div class="checkbox ">
      <label><input type="checkbox" name="AAA11[]" value="Language" >Language</label>
    </div>
    <div class="form-group ">
      <!-- <label><input type='text' name="AAA11[]" placeholder="Other, Please specify"></label> -->
    </div>
    </td>
  </tr>
  <input type="text" name="q12" value="In your current country, do you have any of the following problems.Check all that applies?" hidden>
  <input type="text" name="q13" value="Is this your first time coming here?" hidden>
  <input type="text" name="q14" value="If no how many times have you been here?(Indicate the number the of times you have been here)" hidden>
  <input type="text" name="q15" value="Why did you come to this country?(select all that applies)" hidden>
  <input type="text" name="q16" value="Please explain why you came to Europe" hidden>
  <input type="text" name="q17" value="Are you presently working here" hidden>
  <input type="text" name="q18" value="Now what kind of problem(s) are you experiencing in the country.Check all that apply" hidden>
  <input type="text" name="q19" value="How did you travel to Europe?" hidden>
  <input type="text" name="q20" value="How did you learn about travel" hidden>
  <input type="text" name="q21" value="How will you describe(briefly) your expectations before and after you arrived" hidden>

  <?php
  $form->the_question(12, CHECKBOX, "In your current country, do you have any of the following problems.Check all that applies", 'AAA12[]', array('Money Problems', "Health Problems", "Conflict with family/partner", "Problems with the authorities(Police ,etc)", "Racism", "Language"));
  $form->the_question(13, RADIO, "Is this your first time coming here?" , 'yesNo', array("Yes", "No"));
  $form->the_question(14, TEXTAREA, "If no how many times have you been here?(Indicate the number the of times you have been here)", "num_times", array());
  $form->the_question(15, CHECKBOX, "Why did you come to this country?(select all that applies)", "AAA15[]", array("Political Reasons", "Economic Hardships", "Health Problems", "Conflict with family/partner", "Problems with the authorities(Police,etc)"));
  $form->the_question(16, TEXTAREA, "Please explain why you came to Europe", "AAA16", array());
  $form->the_question(17, SELECT, "Are you presently working here", "current_work", array("Working", "Casually employed", "Unemployed", "Never worked in my life"));
  $form->the_question(18, CHECKBOX, "Now what kind of problem(s) are you experiencing in the country.Check all that apply", "AAA18[]",array("Money Problems", "Health Problems", "Conflict with family/partner", "Problems with the authorities(Police,etc)"));
  $form->the_question(19, CHECKBOX, "How did you travel to Europe?", "AAA19[]", array("Air", "Land", "Sea"));
  $form->the_question(20, TEXTAREA, "How did you learn about travel(Please explain briefly)", "travel", array());
  $form->the_question(21, TEXTAREA, "How will you describe(briefly) your expectations before and after you arrived", "expectations", array());

   ?>
</table>
 <h1>SECTION B: INSTRUCTIONS</h1>
 <p>WE WOULD LIKE TO KNOW YOUR EXPERIENCES BEFORE YOU LEFT YOUR HOME COUNTRY AND AFTER YOUR ARRIVAL TO YOUR PRESENT COUNTRY,PLEASE GIVE HONEST ANSWERS TO ALL THE QUESTIONS BY CHECKING THE RELEVANT OPTION.IT IS IMPORTANT THAT YOU ANSWER ALL THE QUESTIONS.
 </p>
 <h3>IN MY COUNTRY BEFORE I ARRIVED HERE:</h3>
 <table class="table table-stripped table-bordered">
 <?php

  $idx = 1;
  foreach ($section_b as $question) {
  $form->the_question($idx, RADIO, $question, "BBBB".$idx,array("Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree" ));
  $idx++;
  }
  ?>
 </table>
<h3>ON MY ARRIVAL IN MY PRESENT COUNTRY:</h3>
<table class="table table-stripped table-bordered">
 <?php 
 $idx = 1;
  foreach ($section_b as $question) {
  $form->the_question($idx, RADIO, $question, "bbbb".$idx,array("Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree" ));
  $idx++;
  }
 ?>
 </table>
 <h1>SECTION C: INSTRUCTIONS</h1>
 <p>We would like to know if you have any medical complaints, and how your health has been in general,over the past few weeks.Please try to answer all the questions by selecting an option which closely applies to you.Thank you very much for your cooperation</p>
 <h3>Have you recently:</h3>
 <table class="table table-stripped table-bordered">
 <?php
 $idx = 1;
  foreach ($section_c as $key => $question) {
  $form->the_question($key, RADIO, key($question), "CCCC".$idx,$question[key($question)]);
  $idx++;
  }
 ?>
 </table>
 <h1>SECTION D: INSTRUCTIONS</h1>
 <p>Please answer each question by selecting yes/no.There are no right or wrong answers,  and no tricky questions.Work quickly and don't think too long about the exact meaning of the questions.PLEASE REMEMBER TO ANSWER EACH QUESTION and honestly.</p>

 <table class="table table-stripped table-bordered">
 <?php
 $idx = 1;
 foreach ($section_d as $question) {
  $form->the_question($idx, RADIO, $question, "DDDD".$idx, array("YES", "NO"));
  $idx++;
 }
 ?>
 </table>
 <p>To what extent do you agree with the statements below?</p>
  <table class="table table-stripped table-bordered">
     <?php
       $idx = 'a';
       foreach ($section_e as $question) {
        $form->the_question($idx, RADIO, $question, "EEEE".$idx, array("Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"));
        $idx++;
 }
 ?>
  </table>
<h1>SECTION F: INSTRUCTIONS</h1>
<p>Below is a list of problems and complaints.Please read each one carefully, select an entry that
indicates how much you have been bothered by that problem last month</p>
    <table class="table table-stripped table-bordered">
     <?php
       $idx = 1;
       foreach ($section_f as $question) {
        $form->the_question($idx, RADIO, $question, "FFFF".$idx, array("Not at all", "A little bit", "Moderately", "Quite a bit", "Extremely"));
        $idx++;
 }
 ?>
 </table>
<h1>SECTION G: INSTRUCTIONS</h1>
<p>These items deal with ways you've been dealing with stress since on arrival in this country.There
are many ways to try to deal with problems.These items ask what you've been doing to deal with the situation.
Obviously, different people deal with things in different ways, but I'm interested in how you've tried to deal with it.
Each item says something about a particular way of dealing with the situation.I would like to know to what extent
you've been doing what the item says.How much or how frequently.Don't answer on the basis of whether it seems to be working or not.
Just whether or not you're doing it.Make your answers as true FOR YOU as you can.</p>
     <table class="table table-stripped table-bordered">
     <?php
       $idx = 1;
       foreach ($section_g as $question) {
        $form->the_question($idx, RADIO, $question, "GGGG".$idx, array("(1) I haven't been doing this at all", "(2) I've been doing this a little bit", "(3) I've been doing this a medium amount", "(4) I've been doing this a lot"));
        $idx++;
 }
 ?>
 </table>
<h1>SECTION H:</h1>
<p>Below is a list of brief descriptions of people.Would you please indicate for each description whether that person
is very much like you, like you, somewhat like you, a little like you, not like you, or not at all like you.</p>
     <table class="table table-stripped table-bordered">
     <?php
       $idx = 1;
       foreach ($section_h as $question) {
        $form->the_question($idx, RADIO, $question, "HHHH".$idx, array("(1) very much like me", "(2) Like me", "(3) somewhat like me", "(4) A little like me", "(5) Not like me", "(6) Not at all like me"));
        $idx++;
 }
 ?>
 </table>
 <div class="form-group">
   <input type="submit" class="form-control btn btn-primary" value="Submit">
 </div>
</form> 

</div>
</div>
<script src="forms-handling.class.js"></script>
<script type="text/javascript">
  var form_handling = new form_handling();
</script>
</body>
</html>