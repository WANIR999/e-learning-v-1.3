<?php
   include "connection.php";
   $select= "SELECT *FROM courses";
   $data= $link->query($select);

   if($data->num_rows>0){
     while($row= $data->fetch_assoc()) {
  ?>
  
  <div class="row my-3 pt-3 border-none rounded-3 bg-white">
     <div class="col ">
       <div>
         <img style="width: 60px; height:60px;" class="rounded-circle my-auto" src="./image/online.webp" alt="img">
       </div>
      </div>
       <div class="col text-start pt-3">
        <div>
          <h6 class="text-muted "><?php echo $row['name'];?></h6>
        </div>
       </div>
       <div class="col text-start pt-3">
        <div>
          <h6 class="text-muted "><?php echo $row['lenght'];?></h6>
        </div>
       </div>
        <div class="col pt-3 text-center">
        <a href="updatecourse.php?id=<?= $row['id']; ?>"><i style="color:#00C1FE ;" class="bi bi-pencil pe-3"></i></a>
        <a href="courses.php?id=<?= $row['id']; ?>&delete=<?= $row['id']; ?>"> <i style="color:#00C1FE ;" class="bi bi-trash"></i></a>
       </div>
     </div>
     <?php  }
   }
?>
