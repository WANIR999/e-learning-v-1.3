<?php
  include 'time.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dashboard-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-color: rgb(248, 241, 241);">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" >
    <div class="mb-3 mt-3">
      <input type="hidden" class="form-control" name="id">
    </div>
    <div class="mb-3 mt-3">
      <label class="text-secondary" for="names">Name:</label>
      <input type="name" class="form-control" id="names" placeholder="Enter a name" name="name" required>
    </div>
    <div class="mb-3 mt-3">
      <label class="text-secondary" >Lenght:</label>
      <input type="text" class="form-control" placeholder="cours's time" name="lenght" required>
    </div>
      <input class="btn btn-primary mb-2" type="submit" name="save" value="save">
  </form>
</div>
<?php
include "connection.php";
if(isset($_POST['save'])){
  $name= $_POST['name'];
  $lenght= $_POST['lenght'];
  $insert="INSERT INTO `courses`(`name`, `lenght`) VALUES ('$name','$lenght')";
  $data= $link->query($insert);
  header('location:courses.php');
}
?>
    </div>
  </div>
</div>
<!-- ::::::::::::::::::::::::::::::::::::main-container:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div id="container" class=" position-relative d-flex"> <!--  -->
<!-- ::::::::::::::::::::::::::::::::::::side-bar:::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<input class="d-none" id="check-v" type="checkbox">       
         <?php
           include 'aside.php';
         ?>
  <input class="d-none" type="checkbox" id="check">
  <?php
   include 'mob-aside.php';
  ?>
<!-- :::::::::::::::::::::::::::::::::::::::::::nav-bar::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
        <div class="container"> <!--  -->
        <?php
           include 'header.php';
          ?>
<!-- :::::::::::::::::::::::::::::::::::::add-zone:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div  class="container">
<div id="std-list" class="row mt-3 border-bottom border-2 border-muted">
<div class="col pb-1">
<div >
  <h3 id="H3" class="fs-4">courses list</h3>
</div>
</div>
<div class="col">
<?php if(!isset($_GET['delete'])){?>
  <div id="std-btn" class=" text-end">
    <i class="fas fa-sort me-1" style="color: #00C1FE; font-size: 20px;"></i>
    <a href="addcourses.php" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn rounded-0" style="color: white; background-color: #00C1FE; font-size: 15px;">ADD NEW COURSE</a>
  </div>
  <?php }?>
  <?php if(isset($_GET['delete'])){ include 'deleteconfcour.php';}
    ?>
</div>
 </div>
 </div>
 
 <!-- :::::::::::::::::::::::::::::::::::::student-lists:::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
 <div id="arrow" class="container">
   <?php
   include 'courses-list.php';
   ?>
</div> 
<!-- :::::::::::::::::::::::::::::::::::::students-cards:::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div id="list-tab-mob" class="container mt-3">
 <?php
 include 'courses-cards.php';
 ?>
</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
  </div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</div>

</body>
</html>