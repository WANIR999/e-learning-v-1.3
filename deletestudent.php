<?php
 require 'connection.php';
 if(isset($_GET['id'])){
     $id=$_GET['id'];
     $delete= "DELETE FROM students WHERE id='$id'";
     $data=$link->query($delete);
 }
 header('location:student.php');

?>