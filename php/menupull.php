<?php
$servername = "localhost";
$username = "tim";
$password = "THeah71412!";
$dbname = "menus";
    $conn = new mysqli($servername, $username, $password, $dbname);

//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//      }

//  $data = "SELECT menuItem FROM pizza";
///  $result = $conn->query($data);

//  if ($result->num_rows > 0) {
      // output data of each row
//      while($row = $result->fetch_assoc()) {
//          echo -" . $row["dailyitem"].";
//      }
//  } else {
//      echo "0 results";
//  }
//  $conn->close();

$dataArray = array();

$datafetch = mysql_query("SELECT menuItem FROM pizza");

while($result = mysql_fetch_array($datafetch)) {
    $dataArray[$result['menuItem']] = $result['name'];
}
?>
