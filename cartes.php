    <?php 
     include 'studrows.php';
    ?> 
<div class="container">    
<div class="row mt-3">
  <div class="col">
    <div class="card w-100 my-2">
        <ul class="list-group list-group-flush" >
          <li class="list-group-item text-info"  style="background-color: #F0F9FF; border: none;"><i class="bi bi-mortarboard" style="color: #51b3f5;"></i></li>
          <a href="student.php" style=" text-decoration:none;"><li class="list-group-item text-info"  style="background-color: #F0F9FF; border: none;">Students</li></a>
          <li class="list-group-item fs-4 fw-bolder"  style="background-color: #F0F9FF; border: none; padding-left:180px;"><span class="text-dark"><?php echo $rowcount?></span></li>
        </ul>
      </div>
  </div>

    <div class="col">
      <div class="card w-100 my-2">
          <ul class="list-group list-group-flush" >
            <li class="list-group-item text-info"  style="background-color: #FEF6FB; border: none;"><i class="bi bi-bookmark" style="color: #e74cac;"></i></li>
            <a href="courses.php" style=" text-decoration:none;"><li class="list-group-item text-info"  style="background-color:#FEF6FB; border: none;">Course</li></a>
            <li class="list-group-item fs-4 fw-bolder"  style="background-color: #FEF6FB; border: none; padding-left:190px;"><span class="text-dark"><?php echo $coursesrows?></span></li>
          </ul>
        </div>
    </div>
    <div class="col">
        <div class="card w-100 my-2">
            <ul class="list-group list-group-flush" >
              <li class="list-group-item text-info" style="background-color:#FEFBEC; border: none;"><i class="bi bi-currency-dollar" style="color: #51b3f5;"></i></li>
              <a href="payment.php" style=" text-decoration:none;"><li class="list-group-item text-info"  style="background-color: #FEFBEC; border: none;">Payments</li></a>
              <li class="list-group-item fs-4 fw-bolder"  style="background-color: #FEFBEC; border: none; padding-left:150px;"><span class="text-dark"><?php  echo $somme['somme']; ?>dhs</span></li>
            </ul>
          </div>
      </div>
      <div class="col">
        <div class="card w-100 my-2">
            <ul class="list-group list-group-flush" >
              <li class="list-group-item text-info"  style="background: linear-gradient(90deg, rgba(64, 205, 235, 1) 46%, rgba(173, 245, 196, 1) 90%, rgba(243, 247, 174, 1) 100%);border: none;"><i class="bi bi-person" style="color: white;"></i></li>
              <li class="list-group-item text-info"  style="  background: linear-gradient(90deg, rgba(64, 205, 235, 1) 46%, rgba(173, 245, 196, 1) 90%, rgba(243, 247, 174, 1) 100%);border: none;"> <span style="color: white;">User</span></li>
              <li class="list-group-item fs-4 fw-bolder"  style="  background: linear-gradient(90deg, rgba(64, 205, 235, 1) 46%, rgba(173, 245, 196, 1) 90%, rgba(243, 247, 174, 1) 100%); border: none; padding-left:190px;"><span class="text-dark"><?php echo $comptes?></span></li>
            </ul>
          </div>
         </div>
   </div>
</div>