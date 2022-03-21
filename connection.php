<?php 
$link= mysqli_connect('localhost','root','','e_classe_db');

if ($link->connect_error){

  die("connection failed". $link->connect_error);
  }
?>