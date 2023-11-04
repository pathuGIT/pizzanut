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
            border-radius: 5px;
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

        .btn1:hover,.btn2:hover {
            background-color: orange;
            border-radius: 10px 10px;
            font-size: larger;
        }
        

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
                        <button class="btn1" name="b1">All Categories</button> <br>
                        <button class="btn2" name="b2">Update Categories</button>
                    </div>  
                </form>
            </div>

            <div class="cat">
                <h1 style="background-color: orange; padding: 20px; border-radius: 10px 10px; color: rgb(71, 71, 71);">Category List</h1>
                <?php include('cat_func.php');?>
            </div>

        </section>
    </div>
</body>
</html>

<?php


?>