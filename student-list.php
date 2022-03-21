  <?php
   include "connection.php";
   $select= "SELECT *FROM students";
   $data= $link->query($select);

   if($data->num_rows>0){
     while($row= $data->fetch_assoc()) {
  ?>
  <div class="row my-3 pt-3 border-none rounded-3 bg-white">
     <div class="col ">
       <div>
         <img style="width: 90px;" src="./image/gens-se-reunissent-au-bar-du-restaurant-pour-diner-isole-illustration-vectorielle-plane-dessin-anime-hommes-femmes-buvant-du-vin-biere-dans-pub_74855-8505.jpg" alt="img">
       </div>
      </div>
       <div class="col text-start pt-3">
        <div>
          <h6 class="text-muted "><?=  $row['name'];?></h6>
        </div>
       </div>
     
       <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['email'];?></h6>
         </div>
        </div>
        <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['phone'];?></h6>
         </div>
        </div>
     
        <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['enroll_number'];?></h6>
         </div>
        </div>
     
        <div class="col-2  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['date_of_admission'];?></h6>
         </div>
        </div>
        <div class="col pt-3 text-center">
        <a href="updatestudent.php?id=<?= $row['id']; ?>"><i style="color:#00C1FE ;" class="bi bi-pencil pe-3"></i></a>
        <a href="#" onclick="setdeleteid(<?= $row['id']; ?>);" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i style="color:#00C1FE ;" class="bi bi-trash"></i></a>
      </div>
     </div>
     <?php  }
   }
     
     ?>





<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="staticBackdropLabel">DELETE</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           ARE YOU SURE?
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <form action="deletestudent.php" method="GET">
           <input type="hidden" name="id" value="">
            <a href="#" id="delete_confirm_button" class="btn btn-primary">Je confirm</a>
           </form>
         </div>
       </div>
     </div>
   </div>

   <script>

    function setdeleteid(id)
    {
      var a = document.getElementById('delete_confirm_button'); //or grab it by tagname etc
      a.href = "deletestudent.php?id="+id;
    }

   </script>