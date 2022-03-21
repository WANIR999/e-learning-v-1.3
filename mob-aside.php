<div id="sidebar2" class="position-sticky top-0 start-0">
 <div class="sidebar-header ">

  <h3 class=" pt-3 ps-3" style="font-size: 10px;"> <span>|</span> E-classe</h3> 
 </div>
 <div class="card w-100 mx-auto mt-4">
     <img src="./image/youcode.jpg" class="card-img-top rounded-circle w-50 mx-auto" alt="img">
     <div class="card-body mx-auto">
       <p class="card-text text-center" style="font-size: 8px;"><span>Admin</span> </p>
     </div>
   </div>
   <div class="list-group mt-5 mb-5 w-100">
     <a href="dashboard.php" class="list-group-item list-group-item-action text-center  <?php if(basename($_SERVER['REQUEST_URI']) == "dashboard.php") echo "active";?>"> <i class="bi bi-house-door pe-3"></i></a>
     <a href="courses.php" class="list-group-item list-group-item-action text-center  <?php if(basename($_SERVER['REQUEST_URI']) == "courses.php") echo "active";?>"><i class="bi bi-bookmark pe-3"></i></a>
     <a href="student.php" class="list-group-item list-group-item-action text-center  <?php if(basename($_SERVER['REQUEST_URI']) == "student.php") echo "active";?>"><i class="bi bi-mortarboard pe-3"></i></a>
     <a href="payment.php" class="list-group-item list-group-item-action text-center  <?php if(basename($_SERVER['REQUEST_URI']) == "payment.php") echo "active";?>"><i class="bi bi-currency-dollar pe-3"></i></a>
     <a href="#" class="list-group-item list-group-item-action  text-center"><i class="bi bi-file-earmark-bar-graph pe-3"></i></a>
     <a href="#" class="list-group-item list-group-item-action  text-center"><i class="bi bi-sliders pe-3"></i></a>
   </div>
   <a href="index.php" class="btn btn-primary btn-sm w-100 mt-5 " style="background-color:#FAFFC1; border: none; color: black;">logout <i class="bi bi-box-arrow-right ms-2"></i></a>
 </div>