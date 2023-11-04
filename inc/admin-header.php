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
    <link rel="stylesheet" href="../css/style.css">
    <title>PizzaNut</title>
    <style>
        
    </style>
</head>

<div class="w3-top">
    <div class="w3-bar w3-border" style="display: flex; align-items: center">
        <a href="../admin/admin_home.php" class="w3-bar-item"><i class="fa fa-cogs" style="font-size: 25px"></i></a>
        <a href="" class="w3-bar-item w3-button w3-hover-none">ADMIN - Dashboard<span style="font-size: small; font-style:italic"></span> </a>
        <a href="#" class="w3-bar-item w3-button" style="position: absolute; right: 0">Log Out</a>
    </div>
    <div class="w3-bar w3-border" style="display: flex; align-items: center">
        <div class='w3-quarter w3-display-container w3-border-right' style='padding-left:15px'>
            <a href="../admin/food.php" class="w3-bar-item">Category</a>
        </div>
        <div class='w3-rest w3-container'>
            <a href="../admin/add_food.php" class="w3-bar-item">Food Add</a>
            <a href="../admin/show_orders.php" class="w3-bar-item">Orders</a>
            <a href="../admin/show_usrs.php" class="w3-bar-item">Users</a>
        </div>
    </div>
</div>

<div class="w3-row w3-border" style="margin-top: 85px;">
