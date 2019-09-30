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
  }
  if($errorMessage != "")
  {
    echo("<p>There was an error:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
//Write Data to file/mySQLserver Section
  else
  {
    $fs = fopen("data/mydata.csv","a");
    fwrite($fs,$varDay . ", " . $varMeal . "\n");
    fclose($fs);

//mySQLserver connection
    $link = mysqli_connect("localhost", "tim", "password", "menu");

    // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

        // Attempt insert query execution
          $sql = "INSERT INTO menutest (day, meal) VALUES ($varDay, $varMeal)";
          if(mysqli_query($link, $sql)){
            echo "Records inserted successfully.";
          } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }

    // Close connection
      mysqli_close($link);

header("Location: ../formSubmit.html");
exit;
  }
?>
