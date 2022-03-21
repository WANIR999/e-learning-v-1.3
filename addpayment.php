<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container bg-white w-50 lg w-100 sm h-100 sm" style="margin-top:30px !important; margin-bottom:30px !important">
  <h4 class="pt-3"> <span>|</span> E-classe</h4> 
  <h2 class="text-center">ADD A PAYEMENT</h5>
  <p class="text-muted text-center">Enter informations to add a payment</p>
  <form method="POST" action="" >
    <div class="mb-1 mt-1">
      <label class="text-secondary" >name:</label>
      <input type="yext" class="form-control" placeholder="Enter a name" name="name" required>
    </div>
    <div class="mb-1 mt-1">
      <label class="text-secondary" >payment schedule:</label>
      <input type="text" class="form-control" placeholder="Enter a name" name="payment_schedule" required>
    </div>
    <div class="mb-1">
      <label class="text-secondary" >bill number:</label>
      <input type="number" class="form-control"  placeholder="Enter email" name="bill_number" required>
    </div>
    <div class="mb-1">
      <label class="text-secondary" >amount paid:</label>
      <input type="phone" class="form-control" placeholder="Enter a phone number" name="amount_paid" required>
    </div>
    <div class="mb-1">
      <label class="text-secondary" > balance amountt:</label>
      <input type="phone" class="form-control" placeholder="Enter a phone number" name="balance_amountt" required>
    </div>
    <div class="mb-1">
      <label class="text-secondary" >Date:</label>
      <input type="date" class="form-control" placeholder="Enter a phone number" name="date" required>
    </div>
      <input class="btn btn-primary mb-2 mx-auto" type="submit" name="save" value="add">
  </form>
</div>
<?php
include "connection.php";
if(isset($_POST['save'])){
  $name= $_POST['name'];
  $schedule= $_POST['payment_schedule'];
  $bill= $_POST['bill_number'];
  $amount= $_POST['amount_paid'];
  $balance = $_POST['balance_amountt'];
  $date = $_POST['date'];

  $insert="INSERT INTO `payment_details`(`name`, `payment_schedule`, `bill_number`, `amount_paid`, `balance_amountt`, `date`) VALUES ('$name','$schedule','$bill','$amount','$balance', '$date')";
  $data= $link->query($insert);
  header('location:payment.php');
}
?>
</body>
</html>

