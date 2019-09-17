<?php
    $ini = parse_ini_file('.config/settings.ini');
    $conn = new mysqli($server_name, $db_user, $db_password, $db_name);

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

$datafetch = mysqli_query($conn, "select menuItem from pizza");

while($row=mysqli_fetch_array($datafetch))
{

$row = json_encode[$data];

echo $data;

;
//while($result = mysql_fetch_array($datafetch)) {
//    $dataArray[$result['menuItem']] = $result['name'];
}
?>
