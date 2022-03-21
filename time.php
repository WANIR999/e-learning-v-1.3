<?php
session_start();
 if(!isset($_SESSION['email'])){
    header("location:index.php?error=you aren't connected");
    exit();
}
?>