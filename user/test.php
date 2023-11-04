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
        echo "<tr>";
                    echo "<td>".'$row[0]'."</td>";
                    echo "<td>".'$row[1]'."</td>";
                    echo "<td>"."<img src='../images/cat/Pizza' width='100px' height='100px'>"."</td>";
                    echo "<td>"."<button>Edit</button>"."</td>";
                    echo "</tr>";
    }
}

?>