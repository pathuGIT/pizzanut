<?php require_once('../inc/connect.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        #-two{
            background-image: linear-gradient(90deg, rgba(247, 247, 40, 0), #f8458a);
        }
        .log{
            margin-top: 150px;
        }
        .reg{
            display:none;
            margin-top: 200px;
        }
        input{
            height: 50px;
            width: 100%;
            outline: none;
            border: none;
            border-bottom: 1px solid rgb(126, 124, 124);
            margin-top: 20px;
            background-color:rgb(255, 254, 254);
        }
        #btn{
            background-color: #000000;
            color: white;
            font-size:medium;
            border-radius: 15px;
            cursor:  pointer;
        }
        #btn:hover{
            background-color: #161616;
        }
        input::placeholder{
            font-size: medium;
        }
        p{
            margin-top: 50px;
            color: rgb(107, 105, 105);
        }
        @media screen and (max-width: 380px) {
            input{
                background-image: linear-gradient(90deg, rgb(252, 252, 252), rgba(255, 0, 98, 0.295));
            }
            #btn{
                background-image: linear-gradient(90deg, rgb(0, 0, 0), rgba(0, 0, 0, 0.308));
            }
        }
    </style>
</head>
<body>
    <div class="raw">
        <div class="col -one" id="-one">
            <div class="all">
                <h3>pizzanut.lk</h3>
                <div class="column">
                    <div id="Co1">
                        <h2>Welcome Back</h2>
                    </div>
                    <div id="Co2" style="display: none;">
                        <h2>Get Started</h2>
                    </div>
                </div>
                
                
                <div class="log" id="log">
                    <form action="log.php" method='POST'>
                        <input type="text" name="mail" id="name" placeholder="user@mail.com" required ><br>
                        <input type="password" name="pswd" placeholder="Password" required ><br>
                        <input id="btn" type="submit" value="Sign in" onclick="err()">
                        <p>For Register<br><a href="#"  style="color: rgb(107, 105, 105);" onclick='chang1()'>Sign up</a></p>
                    </form>
                </div>

                <div class="reg" id="reg">
                    <form action="reg.php" method="POST">
                        <input type="text" name="name" id="name" placeholder="Name" required><br>
                        <input type="email" name="mail" id="mail" placeholder="Email" required><br>
                        <input type="password" name="pswd"  placeholder="Password" required><br>
                        <input type="submit" value="Sign Up" id="btn" onclick="err()">
                        <p>For Login<br><a href="#"  style="color: rgb(107, 105, 105);" onclick='chang2()'>Sign in</a></p>
                    </form>
                </div>

            </div>  
        </div>

        <div class="col -two" id="-two">
            <div class="img" >
                <img src="girl.png" style="width: 100%;" alt="">
                <p style="text-align: center; font-weight: 300; font-size: 2vw; letter-spacing: 1px;">Customize as you like <br> <span style="font-family: cursive; font-weight: 800; letter-spacing: 0; ">pizzanut.lk</span>  </p>
            </div>
        </div>
    </div>

    <script>
        function chang1(){
            document.getElementById("reg").style.display = 'block';
            document.getElementById("log").style.display = 'none';
        }
        function chang2(){
            document.getElementById("reg").style.display = 'none';
            document.getElementById("log").style.display = 'block';
        }
        
    </script>
</body>
</html>



