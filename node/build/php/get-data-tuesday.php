
<?php
  //Monday
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
    $tuesday = $dblink->query("SELECT * FROM daily WHERE day = "Tuesday"");

  //Initialize array variable
    $tuesday = array();

  //Fetch into associative array
    while ( $row = $tuesday->fetch_assoc())  {
  	$tuesday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($tuesday);
?>
