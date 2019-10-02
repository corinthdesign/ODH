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
  if(empty($_POST['chefs'] || empty($_POST['main'] || empty($_POST['veg'] || empty($_POST['piz'] || empty($_POST['grill'] || empty($_POST['deli'] || empty($_POST['soup'] || empty($_POST['soup2']))
  {
    $errorMessage .= "<li>Please enter at least 1 menu item to update.</li>";
  }
    $varDay = $_POST['day'];
    $varMeal = $_POST['meal'];
    $varItem = $_POST['item'];
  }
  if($errorMessage != "")
  {
    echo("<p>There was an error:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
//Write Data to file/mySQLserver Section
  else
  {
    $fs = fopen("data/datalog.txt","a");
    fwrite($fs,$varDay . ", " . $varMeal . ", " . $varItem . "\n");
    fclose($fs);

//mySQLserver connection
    $link = mysqli_connect("localhost", "tim", "password", "menu");

    // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

        // Attempt insert query execution
          $sql = "UPDATE chefsCorner SET item = '$varItem' WHERE day = '$varDay' AND meal = '$varMeal'";
          if(mysqli_query($link, $sql)){
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
