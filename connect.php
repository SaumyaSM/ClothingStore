<?php

$con = new mysqli('localhost', 'root', '', 'clothingstore');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
