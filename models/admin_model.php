<?php

function model_validate_loggedin(&$username,&$password){
global $conn;

$query = "SELECT `id` FROM `information` WHERE `username`='$username' AND `password`='$password' ";
$result = mysqli_query($conn, $query);

return $result;
}


?>