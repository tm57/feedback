<?php
//require_once dirname(__FILE__) . '/config/config.php';
require_once dirname(__FILE__). "/../sections.inc";
/**
* 
*/
class TableData {
  var $responses = array();
  var $questions = array();
  var $section_prefix = "DDD";
  
  function __construct($post = array(), $section_prefix, $questions = array()){
    $this->section_prefix = $section_prefix;
    foreach ($post as $key => $value) {
      if(strcmp( substr($key , 0, 3) , $section_prefix) == 0){
            array_push($this->responses, $value);
      }
    }
    $this->questions = $questions;

  }

  /*
  return data rows in as Javascript arrays

  */

  public function data_rows(){
    $idx = 1;
    $result = "";
    $last_key = end(array_keys($this->questions));
    //if (count($this->questions) == count($this->responses)) {
        foreach ($this->questions as $key => $question) {
          $row = '['.$idx.', "'.$this->string_format($question).'", "'.$this->responses[$idx].'" ]';
          if ($key != $last_key) {
            $row.=',
            ';
          }
          $result.=$row;
          $idx++;
        }
   // }

    $result = 'var data = ['.$result.'
    ];
    ';

    return $result;
  }

  public function data_rows_special(){
    $result = "";
    $idx = 0;
    $last_key = end(array_keys($this->questions));
    //if (count($this->questions) == count($this->responses)) {
        foreach ($this->questions as $key => $question) {
          $row = '["'.$key.'", "'. $this->string_format(key($question)). '", "'.$this->responses[$idx].'" ]';
          if ($key != $last_key) {
            $row.=',
            ';
          }
          $result.=$row;
          $idx++;
        }
   // }

    $result = 'var data = ['.$result.'
    ];
    ';

    return $result;
  }

  function string_format($str = ""){
  if(strlen($str) <= 54){
    return $str.'\n';
  }
    return substr(($str), 0, 54).'-\n-'.string_format(substr($str, 54));
  
}
}

$b = new TableData($_POST, "BBB", $section_b);
$c = new TableData($_POST, "CCC", $section_c);
$d = new TableData($_POST, "DDD", $section_d);
$e = new TableData($_POST, "EEE", $section_e);
$f = new TableData($_POST, "FFF", $section_f);
$g = new TableData($_POST, "GGG", $section_g);
$h = new TableData($_POST, "HHH", $section_h);

?>