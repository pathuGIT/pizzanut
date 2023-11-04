<?php require_once('../inc/connect.php')?>

<?php 
//here can display user name in heder
session_start();
    $query = "SELECT user_id,username,email FROM users";
    $result = mysqli_query($conn,$query);

    $X = $_SESSION['user_id'];

    if($result){
        while($record = mysqli_fetch_assoc($result)){
            if( $X == $record['user_id']){

                $ui = $record['user_id'];
                $un = $record['username'];
                $mail = $record['email'];
                break;
            }else{
            }
        }
    }else{
        echo"Failed";
    }

?>
<?php require_once('../inc/header.php')?>

<?php

if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    echo "<script>window.location.href = '../loggin/login.php';</script>";
    exit;
}

// Include your database connection or other necessary files
require_once('../inc/connect.php');

$user_id = $_SESSION['user_id'];

// Retrieve user details from the database
$stmt = $conn->prepare("SELECT username, email FROM users WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Profile</title>
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <p>Welcome, <?php echo $username; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <a href="../loggin/login.php">Logout</a>
    </div>
</body>
</html>
