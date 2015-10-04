<?php
define('SELECT', 1);
define('RADIO', 2);
define('CHECKBOX', 3);
define('TEXTAREA', 4);
/**
*@brief a very simple class to design a feedback form so some developer out there does not have 
*to write much to build some custom form
*@author Tinashe Matate
*@email tmatate.act@gmail.com
*@date September 28 2015
*@license MIT share alike 
*/
class Question{

  public function __construct(){
    $this->question = "This is a default question<br>";
  }

/**
*@brief the function to use in your form 
*Note that this works in a form with a table in it, you may of course customize it to your needs
*@param $number the count of the questions
*@param $type the type of answering system, whether text , multiple choice etc
*I have only 4 types of questions defined by SELECT , RADIO , CHECKBOX, TEXTAREA
*@param $text question text
*@param $name the name attribute to access the form data after HTTP POST request
*@param $options select , checkbox, radio options text
*@return none, echo the table row
*/
  public function the_question($number, $type, $text, $name, $options = array()){
      switch ($type) {
        case SELECT:
          echo "<tr>".$this->select($number, $text, $options, $name)."</tr>";
          break;
        case RADIO:
          echo "<tr>".$html.$this->radio($number, $text, $name, $options)."</tr>";
          break;
        case CHECKBOX:
            echo "
            <tr>".$html.$this->checkbox($number, $text, $name, $options)."</tr>";
          break;
        case TEXTAREA:
            echo "<tr>".$this->textarea($number, $text, $name)."</tr>";
            break;
        default:
          
          break;
      }
  }

/**
*@brief radio button generator
*@param $number question count 
*@param $question the question text
*@param $name the name of the group radio buttons
*@param $arr array of display strings for the radios to be generated
**/
  public function radio($number, $question, $name,  $arr = array()){
    $html = '<td>'.$number.'</td>
     <td>'.$question.'</td>
     <td>';
      foreach ($arr as $display_text) {
        $html.='
        <div class="radio">
        <label><input type="radio" name="'.$name.'" value="'.$display_text.'"> '.$display_text.' </label>
        </div>
        ';
      }
     return $html."</td>";
  }

/**
*@brief checkbox generator
*@param $number question count 
*@param $question the question text
*@param $arr array of name->text strings for the check boxes to be generated
**/
  public function checkbox($number, $question, $name, $arr = array()){
     $html = '<td>'.$number.'</td>
     <td>'.$question.'</td>
     <td>';
      foreach ($arr as $display_text) {
        $html.='<div class="checkbox">
        <label class="checkbox"><input type="checkbox" value="'.$display_text.'" name="'.$name.'">'.$display_text.'</label>
        </div>';
      }
     return $html."</td>";
  }

/**
*@brief create a row for question with select options
*@param $number the question number
*@param $question the question text
*@param $arr array with the select options
*@param $name name attribute to access the form data after HTTP POST request
*@return the table row (html) 
*/
  public function select($number, $question, $arr = array(), $name){
    $options = "";
    foreach ($arr as $option) {
      $options.="<option>".$option."</option>
      ";
    }
    $select = '<td>'.$number."</td>
    <td>".$question.'</td>
    <td>
    <div class="form-group">
    '.
      "<select class='form-control' name='".$name."'>
      ".$options."</select>
      </div>
      </td>";
    return $select;
  }

/**
*@brief textbox generator
*@param $number the question count
*@param $text text value
*@param $name name attribute for HTTP POST request
*@return string $html, form table row, with question,question number,and the textarea
*/
  public function textarea($number, $text, $name){
      $html = '<td>'.$number.'</td>
      '.
  '<td>'.$text.'</td>
  <td>
  <div class="form-group">
  <textarea class="form-control" rows="5" name="'.$name.'"></textarea>
</div>
</td>';
return $html;
  }
}
?>