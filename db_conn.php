<?php 

$conn = new mysqli('localhost', 'root', '', 'motorpool_management_system');
if(!$conn){
    die(mysqli_error($conn));
}
//echo "Connected!"
?>