<?php
if($_POST['submit'] == "Update Menu")
{
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
  else
  {
    $fs = fopen("/var/www/997-augie/ODH/php/mydata.txt","w");
    fwrite($fs,$varDay . ", " . $varMeal . "\n");
    fclose($fs);

    header("Location: ../formSubmit.html");
    exit;
  }

?>

<?php
  $fp = fopen('mydata.txt', 'a') or die('fopen failed');

  fwrite($fp, "$name\t$email\t$leader\t$industry\t$country\t$zip\r\n") or die('fwrite failed');
?>

<?php
 $dir = 'myDir';

 // create new directory with 744 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
 if ( !file_exists($dir) ) {
     mkdir ($dir, 0744);
 }

 file_put_contents ($dir.'/test.txt', 'Hello File');
 ?>
