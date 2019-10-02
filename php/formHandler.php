<?php
if($_POST['submit'] == "Update Menu")
{
//Error Reporting and Validation
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
    $varChefs = $_POST['chefs'];

  }
  if($errorMessage != "")
  {
    echo("<p>There was an error:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
//Write Data to php/datalog.txt
  else
  {
    $fs = fopen("data/datalog.txt","a");
    fwrite($fs,$varDay . ", " . $varMeal . ", " . $varChefs . "\n");
    fclose($fs);

//mySQLserver connection
    $link = mysqli_connect("localhost", "tim", "password", "menu");

    // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

        // Attempt insert query execution
          $sql = "UPDATE daily SET chefs = '$varChefs' WHERE day = '$varDay' AND meal = '$varMeal'";

          if(mysqli_multi_query($link, $sql){
            echo "Records inserted successfully.";
          } else{
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);

          }

    // Close connection
      mysqli_close($link);

header("Location: ../formSubmit.html");
exit;
  }
?>
