<?php require_once('../inc/connect.php') ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if the form has been submitted
        $uname = $_POST["username"];
        $pswd = $_POST["password"];

        if ($uname == 'admin' && $pswd == 'admin') {
            echo "<script>window.location.href = '../admin/admin_home.php';</script>";
        }

        if (empty($uname) || empty($pswd)) { //validating part 
            echo "<script>alert('Username and Password are required.');</script>";
        } else {
            $search = "SELECT user_id, username, email, password FROM users";
            $search_result = mysqli_query($conn, $search);

            $found = false;

            while ($record = mysqli_fetch_assoc($search_result)) {
                $rname = $record['username'];
                $rpswd = $record['password'];

                if ($uname == $rname && $pswd == $rpswd) {
                    session_start();
                    $_SESSION['user_id'] = $record['user_id'];
                    $_SESSION['user_name'] = $record['username'];

                    echo "<script>window.location.href = '../user/test_user_home.php';</script>";
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                echo "<script>alert('Invalid username or password. Please try again.');</script>";
            }

            
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .div-main {
            width: 60%;
            background-color: #fff;
            border-radius: 10px ;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            margin: 0 auto; 
        }

        h1 {          
            font-size: 45px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1c384d;
            font-weight:bold;
            text-align: left;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            font-family: 'Helvetica Neue', sans-serif;
            margin: 10px 0;
            color: grey;
            border: 1px solid grey;
            padding:8px;
            border-radius: 6px;
            
        }

        input {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
        }

        #btns {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width:150px;
            height:40px;
            transition: background-color 0.3s;
            margin-right:10px;
        }

        #btns:hover {
            background-color: #2980b9;
        }

        #btnr {
            background-color: #fcc203;
            color: white;
            width:150px;
            height:40px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
            margin-left:10px;
        }

        


        #btnr:hover {
            background-color: #fca103;
        }

        table {
            width: 100%;
        }

        tr, td {
            padding: 10px 0;
        }

        #closeButton {
            background-color: white;
            color: black;
            border: none;
            padding: 10px;
            border-radius: 20px;
            /* border: 2 px solid black; */
            cursor: pointer;
            font-weight: bold;
            width: 40px;
            margin-top: 20px;
            transition: background-color 0.3s;
            float:right;
            margin-top:-10px;
            margin-right:-10px;
            font-size:15px;
        }

        #closeButton:hover {
            background-color: red;
            color:white;
        }
        h3{
            margin-bottom:-600px;
            margin-right:30%;
        }
    </style>
</head>
<body>
    <div class="div-main">
        <button id="closeButton">X</button>
        <h1>Login</h1>
        
        <form action="" method="POST">
        <table border="0">
                <tr>
                    <td><label for="un">User Name :</label></td>
                    <td><input type="text" name="username" placeholder="Enter User Name"></td>
                </tr>
                <tr>
                    <td><label for="p">Password :</label></td>
                    <td><input type="password" name="password" placeholder="Enter Password"></td>
                </tr>
                <tr>
                    <td colspan="2" id="btn-tr">
                        <button id="btns" type="submit" id="id_sub">Login</button>
                        <button id="btnr" type="reset">Reset</button>
                    </td>
                </tr>
            </table>
            <p>Register with <a href="register.php">pizzanut</a></p>
    </form>

    <script>
            // Adding an event listener to "X" button
            document.getElementById("closeButton").addEventListener("click", function() {
                // link to the index page
                window.location.href = "../index.html";
            });
    </script>
</div>
</body>
</html>