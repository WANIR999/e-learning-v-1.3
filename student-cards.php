<?php
   include "connection.php";
   $select= "SELECT *FROM students";
   $data= $link->query($select);

   if($data->num_rows>0){
     while($row= $data->fetch_assoc()) {
  ?>
   <div class="card my-3" style="width: 100%;">
  <img src="./image/gens-se-reunissent-au-bar-du-restaurant-pour-diner-isole-illustration-vectorielle-plane-dessin-anime-hommes-femmes-buvant-du-vin-biere-dans-pub_74855-8505.jpg" class="card-img-top rounded-circle" alt="img">
  <div class="card-body">
    <h5 class="card-title">username:<?=  $row['name']?></h5>
    <p class="card-text">email:<?=  $row['email']?></p>
    <p class="card-text">Phone:<?=  $row['phone']?></p>
    <p class="card-text">enroll-num:<?=  $row['enroll_number']?></p>
    <p class="card-text">admission date: <?=  $row['date_of_admission']?></p>
    <a href="updatestudent.php?id=<?= $row['id']; ?>"><i style="color:#00C1FE ;" class="bi bi-pencil pe-3"></i></a>
    <a href="student.php?id=<?= $row['id']; ?>&delete=<?= $row['id']; ?>"> <?php if(!isset($_GET['delete'])){?> <i style="color:#00C1FE ;" class="bi bi-trash"></i> <?php }?> </a>
  </div>
</div>

<?php }
} ?>
