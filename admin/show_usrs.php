<?php require_once('../inc/connect.php')?>
<?php require_once('../inc/admin-header.php')?>

<?php
error_reporting(0);
    
    $table = '';
    
    $table.="<table class='w3-container w3-table' border=1><tr><th>User ID</th><th>User Name</th><th>Mail</th></tr>";
    
    
        $query = "SELECT user_id,username,email FROM users";
    
    $result = mysqli_query($conn,$query);

    if($result){
        while($record = mysqli_fetch_assoc($result)){
            $id = $record['user_id'];
            $name = $record['username'];
            $mail = $record['email'];

            $table .= "<tr><td>{$id}</td><td>{$name}</td><td>{$mail}</td>";
            
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