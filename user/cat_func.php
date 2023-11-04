<?php

$h = "localhost";
$u = "root";
$p = "";

$conn = mysqli_connect($h, $u, $p);

if (!$conn) {
    die("Connection error!<br><br>" . mysqli_error($conn));
} 
else {
    $sql = mysqli_select_db($conn, 'pizzanut');

    if (!$sql) {
        die('Could not connect database!<br><br>' . mysqli_error($conn));
    } 
    else {
        $ac = $_POST['b1'];
        $uc = $_POST['b2'];

        function all_cat() {
            global $conn;
            $sql1 = mysqli_query($conn, 'SELECT * FROM categories');

            if(!$sql1) {
                die('Could not execute query!'. mysqli_error($conn));
            }
            else {

                echo '<table style="width: 1000px; text-align:left;">';
                echo '<thead style="background-color: white; height:50px;">';   
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>NAME</th>';
                echo '<TH>IMAGE</TH>';
                echo '<TH>EDIT</TH>';
                echo '</tr>';
                echo '</thead>';     
                echo '<tbody>';     

                while ($row=mysqli_fetch_row($sql1)) {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>"."<img src='../images/cat/$row[1].jpg' width='100px' height='100px'>"."</td>";
                    echo "<td>"."<button style='padding:10px; background-color:orange; border-radius:10px;'>Add to cart</button>"."</td>";
                    echo "</tr>";
                }

                echo '</tbody>';
                echo '</table>';
            }
        }

        function up_cat() {
            global $conn;
            $sql2= mysqli_query($conn,);
        }


        if (isset($ac)) {
            all_cat();
        }
    }
}

?>