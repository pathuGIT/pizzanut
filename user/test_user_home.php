<?php require_once('../inc/connect.php')?>
<?php require_once('../inc/header.php')?>

<?php
    $query = "SELECT name,price FROM foods";
    $result = mysqli_query($conn,$query);
    $table = '';
    $table.='<table border=1><tr><th>Food Name</th><th>Price</th></tr>';
    if($result){
        while($record = mysqli_fetch_assoc($result)){
            $name = $record['name'];
            $price = $record['price'];

            $table .= "<tr><td>{$name}</td><td>{$price}</td></tr>";


        }
        $table .= '</table>';
        echo $table;
    }else{
        echo"Failed";
    }
?>

</div>