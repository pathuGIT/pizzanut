<?php require_once('../inc/connect.php') ?>
<?php require_once('../inc/admin-header.php') ?>


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

<body>
    <div class="w3-row " style="margin-top: 50px;">
        <div class="w3-half  my-display-middle">
            <div class="my-content ">
                <h3 class="my-tangerine" style="font-size: 9vw;">Our special</h3>
                <h3 style="text-align: right"><span class="my-maven" style="font-size: 5vw; font-weight: 700;">Pizza
                    </span> <span class="my-tangerine" style="font-size: 7vw;">recipe</span></h3>
                <p class="w3-p">
                    Welcome to Pizza Nut! Explore our mouthwatering menu, customize your order, and enjoy the
                    convenience of online food delivery. Satisfy your cravings with Pizza Nut today!
                </p>
                <a href="" class="w3-button w3-highway-orange my-px my-maven my-round">Our Menu</a>
            </div>
        </div>
        <div class="w3-half  my-display-middle" style="margin-top: 50px;">
            <div class="" style="width: 60%;">
                <img src="../images/H Pepperoni Pizza.png" alt="" class="w3-img" style="width: 100%;">
            </div>
        </div>
    </div>

    <script src="js/slideshow.js"></script>
</body>

</html>



</div>