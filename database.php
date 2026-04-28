<<<<<<< HEAD
<?php
    $conn = new mysqli("localhost","root","","bca26");
    if(!$conn){
        echo "Error while connecting database";
        die();
    }
=======
<?php
    $conn = new mysqli("localhost","root","admin","bca26");
    if(!$conn){
        echo "Error while connecting database";
        die();
    }
>>>>>>> f69271eda5e1ff414df6a1a22f677b1d475bd37c
?>