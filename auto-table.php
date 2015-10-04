<?php
//This file is responsible for generating the data strings for the pdf version of the feedback completed form.


function string_format($str = ""){
  if(strlen($str) <= 54){
    return $str.'\n';
  }else{
    return substr(($str), 0, 54).'-\n-'.string_format(substr($str, 54));
  }
}

$jsArray = 'var data = [';
for($i = 1; $i < 5;$i++){
  $jsArray.= '['.$i.', "'.$_POST["q{$i}"].'", "'.$_POST["AAA{$i}"].'"],
  ';
}

$dataA = array();
if(isset($_POST['AAA5A'])){
  $dataA["AAA5"] = $_POST['AAA5A'];
}else{
  $dataA["AAA5"] = $_POST['AAA5'];
}

$jsArray.= '["5", "'.$_POST["q5"].'", "'.$dataA['AAA5'].'"],
  ';

for($i = 6; $i < 10;$i++){
  $jsArray.= '['.$i.', "'.$_POST["q".$i].'", "'.$_POST['AAA'.$i].'"],
  ';
}

if(isset($_POST['AAA10A'])){
  $dataA["AAA10"] = $_POST['AAA10A'];
}else{
  $dataA["AAA10"] = $_POST['AAA10'];
}

$jsArray.= '["10", "'.$_POST["q10"].'", "'.$dataA['AAA10'].'"],
  ';
$temp = "";
foreach ($_POST["AAA11"] as $value) {
  $temp.=$value;
}
$short = string_format($_POST["q11"]);
$jsArray.= '["11", "'.$short.'", "'.$temp.'"],
  ';

$temp = "";
foreach ($_POST["AAA12"] as $key => $value) {
  $temp.=$value;
}
$short = string_format($_POST["q12"]);
$jsArray.= '["12", "'.$short.'", "'.$temp.'"],
  ';

for($i = 13; $i < 15;$i++){
  $jsArray.= '['.$i.', "'.string_format($_POST["q".$i]).'", "'.$_POST['AAA'.$i].'"],
  ';
}

$temp = "";
foreach ($_POST["AAA15"] as $value) {
  $temp.=$value.'\n';
}
$jsArray.= '["15", "'.$_POST["q15"].'", "'.$temp.'"],
  ';

$jsArray.= '["16", "'.$_POST["q16"].'", "'.$_POST['AAA16'].'"],
';
$jsArray.= '["17", "'.$_POST["q17"].'", "'.$_POST['AAA17'].'"],
';

$temp = "";
foreach ($_POST["AAA18"] as $key => $value) {
  $temp.=$value;
}
$jsArray.= '["18", "'.string_format($_POST["q18"]).'", "'.$temp.'"],
  ';

$temp = "";
foreach ($_POST["AAA19"] as $key => $value) {
  $temp.=$value;
}
$jsArray.= '["19", "'.$_POST["q19"].'", "'.$temp.'"],
  ';

$jsArray.= '["20", "'.$_POST["q20"].'", "'.$_POST['AAA20'].'"],
';
$jsArray.= '["21", "'.string_format($_POST["q21"]).'", "'.$_POST['AAA21'].'"]
];';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Collection Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> </script>
<?php echo "<script>".$jsArray."</script>";?>
</head>
<body style="margin-top:70px">
<script src="bower_components/jspdf/dist/jspdf.min.js"></script>
<script src="bower_components/jspdf-autotable/dist/jspdf.plugin.autotable.js"></script>
<form action="db_save.php" method="post" id="hidden_form">
  <input type="text" name="dataurlstringprocessed" hidden>
  <input type="submit" value="submit" hidden>
</form>
<script type="text/javascript">

var columns = ["", "", ""];
var doc = new jsPDF('p', 'pt');
<?php require_once 'model/table-data.php';?>
doc.text(40, 40, "SECTION A");
doc.autoTable(columns, data);

doc.addPage();
<?php echo $b->data_rows();?>
doc.text(40, 40, "SECTION B");
doc.autoTable(columns, data);

doc.addPage();
doc.text(40, 40, "SECTION C");
<?php echo $c->data_rows_special();?>
doc.autoTable(columns, data);

doc.addPage();
<?php echo $d->data_rows();?>
doc.text(40, 40, "SECTION D");
doc.autoTable(columns, data);

doc.addPage();
doc.text(40, 40, "SECTION E");
<?php echo $e->data_rows();?>
doc.autoTable(columns, data);

doc.addPage();
doc.text(40, 40, "SECTION F");
<?php echo $f->data_rows();?>
doc.autoTable(columns, data);

doc.addPage();
doc.text(40, 40, "SECTION G");
<?php echo $g->data_rows();?>
doc.autoTable(columns, data);

doc.addPage();
doc.text(40, 40, "SECTION H");
<?php echo $h->data_rows();?>
doc.autoTable(columns, data);
var string = doc.output('dataurlstring');
jsForm = document.forms['hidden_form'];
jsForm.elements["dataurlstringprocessed"].value = string;
jsForm.submit();
 </script>
</body>
</html>