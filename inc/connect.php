<?php

$conn = mysqli_connect('localhost','root','','pizzanut',3308);

    if(mysqli_connect_errno()){
        die('Database connection filed' . mysqli_connect_error());
    }else{
        //echo"Connected!";
    }

?>
