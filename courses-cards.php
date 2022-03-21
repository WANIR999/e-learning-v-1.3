<?php
   include "connection.php";
   $select= "SELECT *FROM courses";
   $data= $link->query($select);

   if($data->num_rows>0){
     while($row= $data->fetch_assoc()) {
  ?>
   <div class="card my-3" style="width: 100%;">
  <img src="./image/gens-se-reunissent-au-bar-du-restaurant-pour-diner-isole-illustration-vectorielle-plane-dessin-anime-hommes-femmes-buvant-du-vin-biere-dans-pub_74855-8505.jpg" class="card-img-top rounded-circle" alt="img">
  <div class="card-body">
  <h6 class="text-muted "><?php echo $row['name'];?></h6>
  <h6 class="text-muted "><?php echo $row['lenght'];?></h6>
  <a href="updatecourse.php?id=<?= $row['id']; ?>"><i style="color:#00C1FE ;" class="bi bi-pencil pe-3"></i></a>
  <a href="courses.php?id=<?= $row['id']; ?>&delete=<?= $row['id']; ?>"> <?php if(!isset($_GET['delete'])){?> <i style="color:#00C1FE ;" class="bi bi-trash"></i> <?php }?> </a>
  </div>
</div>

<?php }
} ?>
