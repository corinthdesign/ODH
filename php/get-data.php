//Chefs Corner
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
    $result = $dblink->query("SELECT item FROM chefsCorner");

  //Initialize array variable
    $dbcc = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$dbcc[]=$row;
    }

  //Print array in JSON format
   echo json_encode($dbcc);
?>

//Main Event
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
    $result = $dblink->query("SELECT item FROM MainEvent");

  //Initialize array variable
    $dbme = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$dbme[]=$row;
    }

  //Print array in JSON format
   echo json_encode($dbme);
?>

//Vegetarian
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
    $result = $dblink->query("SELECT item FROM Vegetarian");

  //Initialize array variable
    $dbveg = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$dbveg[]=$row;
    }

  //Print array in JSON format
   echo json_encode($dbveg);
?>

//Pizza Station
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
    $result = $dblink->query("SELECT item FROM pizza");

  //Initialize array variable
    $dbpiz = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$dbpiz[]=$row;
    }

  //Print array in JSON format
   echo json_encode($dbpiz);
?>

//Grill
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
    $result = $dblink->query("SELECT item FROM grill");

  //Initialize array variable
    $dbgrill = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$dbgrill[]=$row;
    }

  //Print array in JSON format
   echo json_encode($dbgrill);
?>

//Deli
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
    $result = $dblink->query("SELECT item FROM deli");

  //Initialize array variable
    $dbdeli = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$dbdeli[]=$row;
    }

  //Print array in JSON format
   echo json_encode($dbdeli);
?>

//Soups
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
    $result = $dblink->query("SELECT item FROM soup");

  //Initialize array variable
    $dbsoup = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$dbsoup[]=$row;
    }

  //Print array in JSON format
   echo json_encode($dbsoup);
?>
