<?php

$conn = mysqli_connect("localhost", "root", "", "crudoperation");

if(!$conn){
    die(mysqli_error($conn));
}    
?>