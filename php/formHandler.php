<?php
if($_POST['submit'] == "Update Menu")
{
  $errorMessage = "";
  if(empty($_POST['day']))
  {
    $errorMessage .= "<li>Please select which day you are submitting.</li>";
  }
  if(empty($_POST['meal']))
  {
    $errorMessage .= "<li>Please select with meal you are submitting</li>";
  }
    $varDay = $_POST['day'];
    $varMeal = $_POST['meal'];
  }
  if($errorMessage != "")
  {
    echo("<p>There was an error:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
  else
  {
    $ret = file_put_contents('mydata.txt', $data, FILE_APPEND | LOCK_EX);
    fwrite($fs,$varDay . ", " . $varMeal . "\n");
    fclose($fs);

    header("Location: ../formSubmit.html");
    exit;
  }

  if(isset($_POST['field1']) && isset($_POST['field2'])) {
      $data = $_POST['field1'] . '-' . $_POST['field2'] . "\r\n";
      $ret = file_put_contents('/tmp/mydata.txt', $data, FILE_APPEND | LOCK_EX);
      if($ret === false) {
          die('There was an error writing this file');
      }
      else {
          echo "$ret bytes written to file";
      }
  }
  else {
     die('no post data to process');
  }
?>
