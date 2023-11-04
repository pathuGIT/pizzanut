<?php require_once('../inc/connect.php')?>
<?php require_once('../inc/admin-header.php')?>

<?php
error_reporting(0);
    
    $table = '';
    
    $table.="<table class='w3-container w3-table' border=1><tr><th>Order ID</th><th>User ID</th><th>Order Date</th><th>Address</th><th>Cost</th></tr>";
    
    
    $query = "SELECT order_id,user_id,order_date,delivery_address,total_amount FROM orders";
    
    $result = mysqli_query($conn,$query);

    if($result){
        while($record = mysqli_fetch_assoc($result)){
            $u_id = $record['user_id'];
            $o_id = $record['order_id'];
            $date = $record['order_date'];
            $address = $record['delivery_address'];
            $cost = $record['total_amount'];

            $table .= "<tr><td>{$u_id}</td><td>{$o_id}</td><td>{$date}</td><td>{$address}</td><td>{$cost}</td>";
            
        }
        $table .= '</table>';
        $table .= "
            </div>
        </div>";

        echo "<div class='w3-container w3-padding-32'>";
        echo $table;
        echo "<div>";
    }else{
        echo"Failed";
    }
?>