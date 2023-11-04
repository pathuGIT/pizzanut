<?php require_once('connect.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@900&display=swap">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <title>PizzaNut</title>
    <style>
        .my-px {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .my-display-middle {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .my-content {
            width: 80%;
        }

        .my-tangerine {
            font-family: "Tangerine", serif;
        }

        .my-maven {
            font-family: 'Maven Pro', sans-serif;
        }
        .my-round{
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<div class="w3-top" style="background-color:white;">
    <div class="w3-bar w3-border">
        <a href="" class="w3-xlarge w3-button w3-hover-none">PizzaNut</a>
    </div>
    <div class="w3-bar w3-border" style="display: flex; align-items: center">
        <a href="../user/test_user_home.php" class="w3-bar-item"><i class="fa fa-home" style="font-size: 25px"></i></a>
        <a href="" class="w3-bar-item w3-button">Categories</a>
        <a href="" class="w3-bar-item w3-button" style="position: absolute; right: 0">
            <?php
                if($X == null){
                    echo 'Be a member';
                }else{
                    echo '<a style="position:absolute; right:10px;" href="../user/profile.php">'.$un.'</a>';

                }
            ?>
        </a>
    </div>
</div>

<div class="w3-row w3-border" style="margin-top: 100px;">
