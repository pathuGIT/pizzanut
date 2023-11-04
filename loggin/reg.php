<?php require_once('../inc/connect.php')?>
<?php


ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form has been submitted, process the data

    $uname = $_POST["name"];
    $mail = $_POST["mail"];
    $pswd = $_POST["pswd"];

    $user_add = "INSERT INTO users VALUES ('','$uname','$mail','$pswd')";
    $add_result = mysqli_query($conn,$user_add);

    if ($add_result) {
        echo "SignUp successfully.";
        echo "<script>window.location.href = '../loggin/login.php';</script>";
        exit;
    } else {
        echo "Not Updated";
    }
}

ob_end_flush();


?>