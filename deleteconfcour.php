<?php
 if(isset($_GET['delete'])) {
   ?>
   <center> <button type="button" class="btn btn-danger w-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     wanna delete a user??
   </button> </center>
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
           <form action="deletecourse.php" method="GET">
           <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
           <input type="submit" value="DELETE" class="btn btn-primary">
           </form>
         </div>
       </div>
     </div>
   </div>
   <?php }?>

  