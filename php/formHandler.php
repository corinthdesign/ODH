<?php
if($_POST['submit'] == "Update Menu")
{
  $errorMessage = "";
  if(empty($_POST['day']))
  {
    $errorMessage .= "<li>Please select which day you are submitting.</li>";
  }
  if(empty($_POST['formName']))
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
    $fs = fopen("mydata.csv","a");
    fwrite($fs,$varDay . ", " . $varMeal . "\n");
    fclose($fs);

    header("Location: formSubmit.html");
    exit;
  }

?>
