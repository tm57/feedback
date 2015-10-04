<?php
require_once dirname(__FILE__) . '/../config/config.php';


/**
* 
*/
class db_save {
  
  function __construct($post = array(), $page = ""){
    if (!isset($post['dataurlstringprocessed'])){
        die("Error, Data could not be captured....");
    }
    $this->post = $post;
    $this->page = $page.".php";
  }
  public function feedback_save(){
    global $conn;
    $sql = "INSERT INTO submissions (dataurlstring) VALUES('".$this->post['dataurlstringprocessed']."')";
    if ($conn->query($sql) === TRUE) {
      header('Location: '.$this->page);
      die();
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die("Error: The was an error saving your feedback form, Please try again.");
    }
    $conn->close();
  }

}

?>