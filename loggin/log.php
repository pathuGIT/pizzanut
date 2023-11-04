<?php require_once('../inc/connect.php')?>
<?php

ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form has been submitted, process the data
    echo 'hello';
    $mail = $_POST["mail"];
    $pswd = $_POST["pswd"];

    $search = "SELECT user_id,username,email,password FROM users";
    $search_result = mysqli_query($conn,$search);

    while($record = mysqli_fetch_assoc($search_result)){
        $rmail = $record['email'];
        $rpswd = $record['password'];

        if($mail == $rmail && $pswd == $rpswd){
            echo 'okay';
            session_start();
                $_SESSION['user_id'] = $record['user_id'];
                $_SESSION['user_name'] = $record['username'];
                
            echo "<script>window.location.href = '../user/test_user_home.php';</script>";
        }elseif($mail == 'admin' && $pswd == 'admin'){
            echo "<script>window.location.href = '../admin/admin_home.php';</script>";
        }else{
            echo 'bad';
        }

    }
}

ob_end_flush();


?>