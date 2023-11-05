<?php

$h = "localhost";
$u = "root";
$p = "";

$conn = mysqli_connect($h, $u, $p,'',3308);

if (!$conn) {
    //die("Connection error!<br><br>" . mysqli_error($conn));
} 
else {
    $sql = mysqli_select_db($conn, 'pizzanut');

    if (!$sql) {
        die('Could not connect database!<br><br>' . mysqli_error($conn));
    } 
    else {

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
                echo '<TH>Info</TH>';
                echo '</tr>';
                echo '</thead>';     
                echo '<tbody>';     

                while ($row=mysqli_fetch_row($sql1)) {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>"."<img src='../images/cat/$row[1].jpg' width='100px' height='100px'>"."</td>";
                    echo "<td>"."<button style='padding:10px; background-color:orange; border-radius:10px;'><a style='text-decoration:none; color:black; font-weight:bold' href='morecategory.php?id=$row[0]'>More Info</a></button>"."</td>";
                    echo "</tr>";
                }

                echo '</tbody>';
                echo '</table><br><br><br><br><br>';
            }
        }

        function search_cat () {
            global $conn;
            $s=$_POST['search'];
            $sql1 = mysqli_query($conn, "SELECT name FROM categories WHERE name='$s'");
            $sql2=mysqli_query($conn,"SELECT * FROM categories WHERE name='$s'");

            echo '<table style="width: 1000px; text-align:left;">';
            echo '<thead style="background-color: white; height:50px;">';   
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>NAME</th>';
            echo '<TH>IMAGE</TH>';
            echo '<TH>Info</TH>';
            echo '</tr>';
            echo '</thead>';     
            echo '<tbody>';

            while ($row=mysqli_fetch_row($sql1)) {
                if (strcasecmp($row[0],$s) == 0) {
                    while ($row1=mysqli_fetch_row($sql2)) {
                        echo "<tr>";
                        echo "<td>".$row1[0]."</td>";
                        echo "<td>".$row1[1]."</td>";
                        echo "<td>"."<img src='../images/cat/$row1[1].jpg' width='100px' height='100px'>"."</td>";
                        echo "<td>"."<button style='padding:10px; background-color:orange; border-radius:10px;'><a style='text-decoration:none; color:black; font-weight:bold' href='morecategory.php?id=$row1[0]' name='mi'>More Info</a></button>"."</td>";
                        echo "</tr>";
                    }
                }      
            }
            
            echo '</tbody>';
            echo '</table>';     
            
        }
        
    }
}

?>