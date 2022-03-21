<?php
  require 'connection.php';
  $compt="SELECT * FROM students";
  $count=$link->query($compt);
  $rowcount=mysqli_num_rows($count);
  
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

  $somme="SELECT SUM(amount_paid) as somme FROM payment_details";

  if(!$result = $link->query($somme))
  {
    die("Connection failed: " . $link->error);
  }
  else
  {
    $somme = $result->fetch_assoc();
  }


  $compt="SELECT * FROM courses";
  $count=$link->query($compt);
  $coursesrows=mysqli_num_rows($count);



  $compt="SELECT * FROM comptes";
  $count=$link->query($compt);
  $comptes=mysqli_num_rows($count);
?>

