<?php require_once('../inc/connect.php')?>
<?php require_once('../inc/admin-header.php')?>

<?php
error_reporting(0);
    
    $table = '';
    $table .= "
        <div class='w3-row w3-padding-32' style='height:80vh;'>
            <div class='w3-quarter w3-display-container' style='height:100%; '>
                <table class='w3-table w3-display-middle' style='height:100%'>
                    <tr><td class='w3-button w3-border' style='vertical-align: middle;'><a class='category_a' href='../admin/food.php?category_id=1' >Pizza</a></td></tr>
                    <tr><td class='w3-button w3-border' style='vertical-align: middle;'><a class='category_a' href='../admin/food.php?category_id=2' >Burgers</a></td></tr>
                    <tr><td class='w3-button w3-border' style='vertical-align: middle;'><a class='category_a' href='../admin/food.php?category_id=3' >Pasta</a></td></tr>
                    <tr><td class='w3-button w3-border' style='vertical-align: middle;'><a class='category_a' href='../admin/food.php?category_id=4' >Salads</a></td></tr>
                    <tr><td class='w3-button w3-border' style='vertical-align: middle;'><a class='category_a' href='../admin/food.php?category_id=5' >Desserts</a></td></tr>
                </table>
            </div>
            <div class='w3-twothird w3-container'>
    ";
    $table.="<table class='w3-table' border=1><tr><th>Food Name</th><th>Price</th><th>Ediit</th><th>Delete</th></tr>";
    $category_id = $_GET['category_id'];
    
    if($category_id == 1){
        $query = "SELECT food_id,name,price FROM foods WHERE category_id = $category_id";
    }elseif($category_id == 2){
        $query = "SELECT food_id,name,price FROM foods WHERE category_id = $category_id";
    }elseif($category_id == 3){
        $query = "SELECT food_id,name,price FROM foods WHERE category_id = $category_id";
    }elseif($category_id == 4){
        $query = "SELECT food_id,name,price FROM foods WHERE category_id = $category_id";
    }elseif($category_id == 5){
        $query = "SELECT food_id,name,price FROM foods WHERE category_id = $category_id";
    }else{
        $query = "SELECT food_id,name,price FROM foods";
    }
    $result = mysqli_query($conn,$query);

    if($result){
        while($record = mysqli_fetch_assoc($result)){
            $name = $record['name'];
            $price = $record['price'];

            $table .= "<tr><td>{$name}</td><td>{$price}</td>";
            $table .= '<td><a id="u" href="../admin/food.php?index='.$record['food_id'].'" ><i class="fa fa-edit" style="font-size: 15px; padding:5px;"></i></a></td>';
            $table .= '<td><a id="d" onclick="myFunction('.$record['food_id'].')" ><i class="fa fa-remove" style="font-size: 15px; padding:5px;"></i></a></td></tr>';
            
        }
        $table .= '</table>';
        $table .= "
            </div>
        </div>";

        echo $table;
    }else{
        echo"Failed";
    }
?>
</div>

<script>
    function myFunction(foodId) {

        if (confirm("Are you sure?") == true) {
            
            // Use the provided foodId parameter to construct the URL
            let url = '../admin/delete.php?index=' + foodId;

            // Redirect to the constructed URL
            window.location.href = url;
        } else {

        }
    }
</script>


<?php 
    $raw = $_GET['index'];
    
    $update_query = "SELECT * FROM foods WHERE food_id = $raw";
    $update_result = mysqli_query($conn,$update_query);

    $u_table = '';
    $u_table.="
    <div id='id01' class='my-modol'>
    <div class='my-modol-inside'>
    <form method='post' action=''> 
    <table border=1 class='w3-table'>
    <tr>
        <th>Food Name</th>
        <th>Price</th>
        
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
        $u_table .= "<tr><td colspan=2><input class='w3-button' id='btn' type='submit' value='Update' style='width:100%'></td></tr>";
        $u_table .= '</table></form></div></div>';
        echo $u_table;
    }else{
        echo"Failed";
    }
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
