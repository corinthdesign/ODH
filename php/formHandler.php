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
          $sql1 = "UPDATE daily SET chefs = '$varChefs' WHERE day = '$varDay' AND meal = '$varMeal'";
          $sql2 = "UPDATE daily SET main = '$varMain' WHERE day = '$varDay' AND meal = '$varMeal'";
          $sql3 = "UPDATE daily SET veg = '$varVeg' WHERE day = '$varDay' AND meal = '$varMeal'";
          $sql4 = "UPDATE daily SET piz = '$varPiz' WHERE day = '$varDay' AND meal = '$varMeal'";
          $sql5 = "UPDATE daily SET grill = '$varGrill' WHERE day = '$varDay' AND meal = '$varMeal'";
          $sql6 = "UPDATE daily SET deli = '$varDeli' WHERE day = '$varDay' AND meal = '$varMeal'";
          $sql7 = "UPDATE daily SET soup = '$varSoup' WHERE day = '$varDay' AND meal = '$varMeal'";
          $sql8 = "UPDATE daily SET soup2 = '$varSoup2' WHERE day = '$varDay' AND meal = '$varMeal'";

          if(mysqli_query($link, $sql1)){
            echo "Records inserted successfully.";
          } else{
            echo "ERROR: Could not execute $sql1. " . mysqli_error($link);
            echo "ERROR: Could not execute $sql2. " . mysqli_error($link);
            echo "ERROR: Could not execute $sql3. " . mysqli_error($link);
            echo "ERROR: Could not execute $sql4. " . mysqli_error($link);
            echo "ERROR: Could not execute $sql5. " . mysqli_error($link);
            echo "ERROR: Could not execute $sql6. " . mysqli_error($link);
            echo "ERROR: Could not execute $sql7. " . mysqli_error($link);
            echo "ERROR: Could not execute $sql8. " . mysqli_error($link);
          }

    // Close connection
      mysqli_close($link);

header("Location: ../formSubmit.html");
exit;
  }
?>
