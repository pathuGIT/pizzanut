
<?php
#connection for database
    $conn = mysqli_connect('localhost','root','','pizzanut',3308);
        if(mysqli_connect_errno()){
            die('Database connection filed' . mysqli_connect_error());
        }else{
            // echo"Connected!";
        }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            margin-right: 250px;
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

        #login_link{
            text-align: center;
            border: 1px solid red;
        }

        p{
            font-size: 20px ;
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

        
    </style>
</head>
<body>
    <div class="div-main">
        
        <button id="closeButton">X</button>
        <h1>Register On PizzaNut</h1>
        
        <div class="div-without-h">
        <form action="" method="POST">
            <table border="0">
                
                <tr>
                    <td><label for="un">User Name :</label></td>
                    <td><input type="text" name="username" placeholder="Enter User Name Here..."></td>
                </tr>

                <tr>
                    <td><label for="em">E-mail Address :</label></td>
                    <td><input type="text" name="email"
                    placeholder="Enter Email Here..."></td>
                </tr>

                <tr>
                    <td><label for="p">Password :</label></td>
                    <td><input type="password" name="password"
                    placeholder="Enter Password Here..."></td>
                </tr>
                <tr>
                    <td colspan="2" id="btn-tr">
                    <button id="btns" type="submit" name='submit'>Register</button>
                    <button id="btnr" type="reset">Reset</button>
                </td>
                </tr>
            </table>
            <p>If you are Registered before, then <a href="login.php">LogIn</a>.</p>  
    </form>
        </div>
    <script>
            // Add an event listener to the "Close" button
            document.getElementById("closeButton").addEventListener("click", function() {
                // Redirect to the home page (you can change "index.html" to the actual home page URL)
                window.location.href = "../index.html";
            });
    </script>
        
    </div>

   
<?php 
    if (isset($_POST['submit'])) {

    $u_name = $_POST['username'];
    $e_add = $_POST['email'];
    $pass = $_POST['password'];


    $sql = "INSERT INTO users(username,email,password) VALUES ('$u_name','$e_add','$pass');";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>window.location.href = '../loggin/login.php';</script>";
    }else{
        echo 'Error';
    }
    
    }

?>  

    
</body>
</html>