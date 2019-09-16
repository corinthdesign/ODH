<?php
    $mysqli = new mysqli("localhost", "tim", "THeah71412!", "menus");
    $result = $mysqli->query("SELECT menuItem FROM pizza");
?>
