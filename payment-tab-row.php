<?php
   include "connection.php";
   $select= "SELECT *FROM payment_details";
   $data= $link->query($select);

   if($data->num_rows>0){
     while($row= $data->fetch_assoc()) {
  ?>
  <tr>
  <td><?=  $row['name']?></td>
  <td><?=  $row['payment_schedule']?></td>
  <td><?= $row['bill_number']?></td>
  <td><?= $row['amount_paid']?></td>
  <td><?= $row['balance_amountt']?></td>
  <td><?= $row['date']?></td>
  <td> <a href="edit.php?id=<?php $row['id'] ?>" ><i class="bi bi-eye text-info"></i></a></td>
</tr>

<?php }
} ?>

              