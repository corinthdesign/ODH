<?php
if($_POST['submit'] == "Update Menu")
{
    $var1 = $_POST['optionone'];
    $var2 = $_POST['optiontwo'];
    $var3 = $_POST['optionthree'];
  }
  if($errorMessage != "")
  {
    echo("<p>There was an error:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
//Write Data to php/datalog.txt Section
  else
  {

//mySQLserver connection
    $link = mysqli_connect("localhost", "tim", "password", "test");

    // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

        // Attempt insert query execution
          $sql = "UPDATE test SET Name = '$var1' WHERE id = '1';
                  UPDATE test SET Name = '$var2' WHERE id = '2';
                  UPDATE test SET Name = '$var3' WHERE id = '3'";

                  if(mysqli_multi_query($link, $sql)){
                    echo "Records inserted successfully.";
                  } else{
                    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
                  }

            // Close connection
              mysqli_close($link);

        header("Location: test.html");
        exit;
          }
?>
