<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>


    <style>

        .main {
            background-color: white;
        }

        .header {
            font-family: 'Maven Pro', sans-serif;
            margin-left: 100px;
            font-size: 200%;
        }

        .instruction {
            position:relative;
            width: auto;
            display: flex;
        }

        .menu {
            float: left;
            width: 20%;
            height: 70vh;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 10px 10px 10px rgb(75, 74, 74);
            background-color: rgb(71, 71, 71);
            color: aliceblue;
        }

        .cat {
            float: right;
            width: 80%;
            margin-left: 100px;
            background-color: aliceblue;
            border-radius: 10px 10px;
            flex: 1;
            overflow: auto;
        }

        .btns {
            background-color: rgb(71, 71, 71);
            margin: 10px;
            padding: 10px;
        }

        .btn1,.btn2 {
            background-color: rgb(71, 71, 71);
            border: none;
            padding: 20px; 
            color: aliceblue;
            width: 250px;
        }

        .btn3 {
            background-color: orange;
            border: none;
            padding:10px 5px;
            border-radius: 5px 5px;
            font-weight: bold;
            margin-left: 10px;
        }

        .btn3:hover {
            color: white;
            cursor: pointer;
        }

        .btn1:hover,.btn2:hover {
            background-color: orange;
            border-radius: 10px 10px;
            font-size: larger;
            cursor: pointer;
        }
        .input[type=text] {
            width: 100%;
            box-sizing: border-box;

        }
        .btn2:active {
            background-color: orange;
            border-radius: 10px 10px;
            font-size: larger;
        }

        <?php include('cat_func.php');?>
        

    </style>

</head>
<body>
    <div class="main">
        <section class="header">
            <h1>Categories</h1>
        </section>

        <section class="instruction">
            <div class="menu">
                <h1 style="text-align: center;">Category Settings</h1>
                <hr>
                <form action="#" method="post">
                    <div class="btns">
                        <button class="btn2" name="b2">Search Categories</button><br>
                        <button class="btn1" name="b1">All Categories</button>
                    </div>  
                </form>
            </div>

            <div class="cat">
                <h1 style="background-color: orange; padding: 20px; border-radius: 10px 10px; color: rgb(71, 71, 71);">Category List</h1>
                
                <?php

                    if (isset($_POST['b1'])) {
                        all_cat();
                    }

                ?>

                <form action="#" method="post">
                <label for='search' style='font-size:50px; '>Search here for our food categories: </label><br>
                <input type='text' name='search' placeholder='search...' style='border-radius: 4px; background-color: white; background-position: 10px 10px; padding: 12px 20px 12px 40px;'>
                    <button class="btn3" name="b3">Search</button><br><br>
                </form>

                <?php 

                    if (isset($_POST['b3'])) {
                        search_cat ();
                    }

                ?>

            </div>

        </section>
    </div>
</body>
</html>

<?php


?>