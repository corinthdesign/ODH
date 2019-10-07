
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
    $monday = $dblink->query("SELECT * FROM daily WHERE day = "Monday"");

  //Initialize array variable
    $monday = array();

  //Fetch into associative array
    while ( $row = $monday->fetch_assoc())  {
  	$monday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($monday);
?>

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
    $result = $dblink->query("SELECT * FROM daily WHERE day = "Tuesday"");

  //Initialize array variable
    $tuesday = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$tuesday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($tuesday);
?>

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
    $result = $dblink->query("SELECT * FROM daily WHERE day = "Thursday"");

  //Initialize array variable
    $thursday = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$thursday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($thursday);
?>

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
    $result = $dblink->query("SELECT * FROM daily WHERE day = "Friday"");

  //Initialize array variable
    $friday = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$friday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($friday);
?>

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
    $result = $dblink->query("SELECT * FROM daily WHERE day = "Saturday"");

  //Initialize array variable
    $saturday = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$saturday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($saturday);
?>

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
    $result = $dblink->query("SELECT * FROM daily WHERE day = "Sunday"");

  //Initialize array variable
    $sunday = array();

  //Fetch into associative array
    while ( $row = $result->fetch_assoc())  {
  	$sunday[]=$row;
    }

  //Print array in JSON format
   echo json_encode($sunday);
?>
