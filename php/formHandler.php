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
    $varMain = $_POST['main'];
    $varVeg = $_POST['veg'];
    $varPiz = $_POST['piz'];
    $varGrill = $_POST['grill'];
    $varDeli = $_POST['deli'];
    $varSoup = $_POST['soup'];
    $varSoup2 = $_POST['soup2'];
  }
  if($errorMessage != "")
  {
    echo("<p>There was an error:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
//Write Data to php/datalog.txt Section
  else
  {
    $fs = fopen("data/datalog.txt","a");
    fwrite($fs,$varDay . ", " . $varMeal . ", " . $varChefs . ", " . $varMain . ", " . $varVeg . ", " . $varPiz . ", " . $varGrill . ", " . $varDeli . "\n");
    fclose($fs);

//mySQLserver connection
    $link = mysqli_connect("localhost", "tim", "password", "menu");

    // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

        // Attempt insert query execution
          $sql = "UPDATE daily SET chefs = '$varChefs' WHERE day = '$varDay' AND meal = '$varMeal';"
          $sql .= "UPDATE daily SET main = '$varMain' WHERE day = '$varDay' AND meal = '$varMeal';"
          $sql .= "UPDATE daily SET veg = '$varVeg' WHERE day = '$varDay' AND meal = '$varMeal';"
                  UPDATE daily SET piz = '$varPiz' WHERE day = '$varDay' AND meal = '$varMeal';
                  UPDATE daily SET grill = '$varGrill' WHERE day = '$varDay' AND meal = '$varMeal';
                  UPDATE daily SET deli = '$varDeli' WHERE day = '$varDay' AND meal = '$varMeal';
                  UPDATE daily SET soup = '$varSoup' WHERE day = '$varDay' AND meal = '$varMeal';
                  UPDATE daily SET soup2 = '$varSoup2' WHERE day = '$varDay' AND meal = '$varMeal'";

          if(mysqli_multi_query($link, $sql)){
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
