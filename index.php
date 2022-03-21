<?php
session_start();
 if(isset($_SESSION['email'])){
    header("location:dashboard.php");
    exit();
}
if(isset($_GET['new'])){
  unset($_COOKIE['email']);
  unset($_COOKIE['password']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="container bg-white ">
        <h4 class="pt-3"> <span>|</span> E-classe</h4>
        <h5 class="text-center">LOG IN</h5>
        <form action="logaction.php" method="POST">
            <?php if(isset($_GET['error'])){?>
            <div class="alert alert-danger fs-6" role="alert"> <?= $_GET['error']; ?> </div>
            <?php }?>
            <?php if (isset($_GET["new"])) { ?>
            <div class="alert alert-success" role="alert">
                <?= $_GET['new']; ?>
            </div>
            <?php } ?>
            <div class="mb-3 mt-3">
                <label class="text-secondary">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email"
                    value=<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }  ?>>
            </div>
            <div class="mb-3">
                <label class="text-secondary">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password"
                    value=<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }  ?>>
            </div>
            <div class="mb-3 d-flex align-items-center">
                <input type="checkbox" name="remember" <?php if(isset($_COOKIE['email'])){?> checked <?php }?>>
                <label class="text-muted ms-2">remember me</label>
            </div>
            <input type="submit" name="login" class="w-100 btn-primary text-white rounded-3 mb-3"
                style="height: 40px !important;">
                <p class="text-center pb-2"> <a href="signin.php" class="text-muted text-center " style="text-decoration:none; font-size: 14px;">creat an account</a></p>
        </form>
    </div>
    <?php 
?>

</body>

</html>