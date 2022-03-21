<?php
 require 'connection.php';
 if(isset($_GET['id'])){
     $id=$_GET['id'];
     $delete= "DELETE FROM courses WHERE id='$id'";
     $data=$link->query($delete);
 }
 header('location:courses.php');

?>