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

    <div class="container bg-white " style="margin-top: 40px !important; height:auto;">
        <h4 class="pt-3"> <span>|</span> E-classe</h4>
        <h5 class="text-center">SIGN IN</h5>
        <p class="text-muted text-center">create your account</p>
        <?php if (isset($_GET["error"])) { ?>
        <div class="alert alert-danger" role="alert"><?= $_GET['error']; ?></div>
        <?php } ?>
        <div class="alert alert-success mt-3 w-50 mx-auto d-none" role="alert" id="success-alert">
        Registered with success
       </div>
        <form id="form" action="" method="POST" onsubmit="return foo();">
            <div class="mb-3 mt-3">
                <input type="hidden" class="form-control" name="id">
            </div>
            <div class="mb-3 mt-3 input-control">
                <label class="text-secondary">name:</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name" >
                <div id="namerror" class="text-danger" style="font-size: 10px;"></div>
            </div>
            <div class="mb-3 input-control">
                <label class="text-secondary">email:</label>
                <input type="email" id="email" class="form-control" placeholder="Enter email" name="email" >
                <div id="emailerror" class="text-danger " style="font-size: 10px;"></div>

                <div class="mb-3 input-control">
                    <label class="text-secondary">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" >
                    <div id="pass1error" class="text-danger " style="font-size: 10px;"></div>
                </div>
                <div class="mb-3 input-control ">
                    <label class="text-secondary">confirme Password:</label>
                    <input type="password" class="form-control" id="password2" placeholder="Enter password" >
                    <div id="pass2error" class="text-danger " style="font-size: 10px;"></div>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" value="user" name="role">
                </div>
                <button type="submit" name="sign"  class="w-100 btn-primary text-white rounded-3 fs-6 mb-2" style="height: 40px !important;">sign-up</button>
                <p class="text-center pb-2"> <a href="index.php" class="text-muted text-center " style="text-decoration:none; font-size: 14px;">you have an account</a></p>
        </form>
    </div>
    <?php
    include 'connection.php';
     if (isset($_POST['sign'])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $pass =hash('sha256', $_POST["password"]) ;
            $role = $_POST["role"];
            $id = $_POST["id"];
        if (!empty($name) && !empty($email) && !empty($pass) && !empty($role)) {
            $query = "SELECT* FROM comptes WHERE email='$email'";
            $sql = $link->query($query);
                if (mysqli_num_rows($sql) > 0) {
                    header('location:signin.php?error= email existe already ');
                
                } else {
                    $query2 = "INSERT INTO comptes (id,name, email,password,role) VALUES ('$id','$name','$email','$pass','$role')";
                    $data = $link->query($query2);
                    header('location:index.php?new= added successfully please sign-up');
                
            }
        }else{
            header('location:signin.php?error=all the inputs bellow are required ');
        }
    }

    ?>

    <script  src="validation.js"> </script>
</body>

</html>