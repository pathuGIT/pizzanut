<?php require_once('../inc/connect.php')?>
<?php 
    $raw = $_GET['index'];
    $delete_query = "DELETE FROM foods WHERE food_id = $raw";

    
    
    $delete_result = mysqli_query($conn,$delete_query);

    if ($delete_result) {
        echo "<script>window.location.href = '../admin/food.php';</script>";
        exit;
    } else {
        echo "Not Deleted";
    }


ob_end_flush(); // Send the captured output to the browser
?>
