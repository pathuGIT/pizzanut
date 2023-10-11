<?php require_once('../inc/connect.php')?>
<?php require_once('../inc/admin-header.php')?>

<?php
error_reporting(0);
    $query = "SELECT food_id,name,price FROM foods";
    $result = mysqli_query($conn,$query);
    $table = '';
    $table.='<table border=1><tr><th>Food Name</th><th>Price</th><th>Ediit</th><th>Delete</th></tr>';
    if($result){
        while($record = mysqli_fetch_assoc($result)){
            $name = $record['name'];
            $price = $record['price'];

            $table .= "<tr><td>{$name}</td><td>{$price}</td>";
            $table .= '<td><a id="u" href="../admin/food.php?index='.$record['food_id'].'"><i class="fa fa-edit" style="font-size: 15px; padding:5px;"></i></a></td>';
            $table .= '<td><a id="d" href="../inc/delete.php?index='.$record['food_id'].'"><i class="fa fa-remove" style="font-size: 15px; padding:5px;"></i></a></td></tr>';
            
        }
        $table .= '</table>';
        echo $table;
    }else{
        echo"Failed";
    }
?>

</div>


<?php 
    $raw = $_GET['index'];

    $update_query = "SELECT * FROM foods WHERE food_id = $raw";
    $update_result = mysqli_query($conn,$update_query);

    $u_table = '';
    $u_table.="
    <form method='post' action=''> 
    <table border=1>
    <tr>
        <th>Food Name</th>
        <th>Price</th>
        <th rowspan=2><input class='w3-button' id='btn' type='submit' value='Update'></th>
    </tr>";
    
    if($update_result){
        while($update_record = mysqli_fetch_assoc($update_result)){
            $u_name = $update_record['name'];
            $u_price = $update_record['price'];

            $u_table .= "
                <tr>
                    <td><input type='text' name='fname' value='{$u_name}'> </td>
                    <td><input type='text' name='fprice' value='{$u_price}'> </td>
                </tr>";
     
        }
        $u_table .= '</table></form>';
        echo $u_table;
    }else{
        echo"Failed";
    }
?>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Form has been submitted, process the data

//     $fname = $_POST["fname"];
//     $fprice = $_POST["fprice"];

//     $submit_u_query = "UPDATE foods SET name = '$fname', price = '$fprice' WHERE food_id = $raw";
//     $submit_u_result = mysqli_query($conn,$submit_u_query);

//     if($submit_u_result){
//         header("Location:../admin/food.php");
//     }else{

//     }
// }

?>

<?php
ob_start(); // Start output buffering

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form has been submitted, process the data

    $fname = $_POST["fname"];
    $fprice = $_POST["fprice"];

    $submit_u_query = "UPDATE foods SET name = '$fname', price = '$fprice' WHERE food_id = $raw";
    $submit_u_result = mysqli_query($conn,$submit_u_query);

    if ($submit_u_result) {
        echo "<script>window.location.href = '../admin/food.php';</script>";
        exit;
    } else {
        echo "Not Updated";
    }
}

ob_end_flush(); // Send the captured output to the browser
?>
