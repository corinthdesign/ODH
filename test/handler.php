<?php

$var1 = $_POST['data'];

//mySQLserver connection
    $link = mysqli_connect("localhost", "tim", "password", "test");

    // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

        // Attempt insert query execution
          $sql = "UPDATE test SET Name = '$var1' WHERE id = '1'";

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
