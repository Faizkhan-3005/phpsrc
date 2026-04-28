<?php
session_start();
<<<<<<< HEAD
include("database.php");

if(isset($_SESSION)){
    session_destroy();
}
header("Location:login.php");
=======
session_destroy();
header("Location: login.php");
exit();
>>>>>>> f69271eda5e1ff414df6a1a22f677b1d475bd37c
?>