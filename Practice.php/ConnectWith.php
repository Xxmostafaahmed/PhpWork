<?php

// Connection with php 
$username="root";
$Password="";
$server='localhost'; // From  localhost
$DataBase='Personal-Information'; // From  localhost

$conn=mysqli_connect($server , $username , $Password ,$DataBase);
if($conn){
    echo"Connection Successful";
}else{
    echo"No connection";
}
?>
