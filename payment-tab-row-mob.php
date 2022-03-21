
<?php
   include "connection.php";
   $select= "SELECT *FROM payment_details";
   $data= $link->query($select);

   if($data->num_rows>0){
     while($row= $data->fetch_assoc()) {
  ?>
  <div class="card my-3" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title text-center">name :<?=  $row['name']?></h5>
    <p class="card-text text-center"> payment schedule : <?=  $row['payment_schedule']?></p>
    <p class="card-text text-center">bill number :<?= $row['bill_number']?></p>
    <p class="card-text text-center">amount paid : <?= $row['amount_paid']?></p>
    <p class="card-text text-center">balance amount : <?= $row['balance_amountt']?></p>
    <p class="card-text text-center"> date :<?= $row['date']?></p>
    <a href="edit.php?id=<?php $row['id'] ?>" class="btn btn-primary w-100"> <i style="color:#00C1FE ;" class="bi bi-eye  pe-3"></i></a>
  </div>
  </div>
  


<?php }} ?>