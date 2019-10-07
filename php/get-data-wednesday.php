<?php
  // Initialize variable for database credentials
  $dbhost = 'localhost';
  $dbuser = 'tim';
  $dbpass = 'password';
  $dbname = 'menu';

  //Create database connection
    $dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  //Check connection was successful
    if ($dblink->connect_errno) {
       printf("Failed to connect to database");
       exit();
    }

  //Fetch rows from Chefs Corner table
    $result = $dblink->query("SELECT * FROM daily WHERE day = "Wednesday"");

  //Initialize array variable
    $wednesday = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$wednesday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($wednesday);
?>
