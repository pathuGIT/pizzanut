<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morecategory</title>
</head>

<body>
    <div>
        <h1 style="font-family: Maven Pro, sans-serif; margin-left: 100px; font-size:100px">
            <?php

            if (isset($_POST['mi'])) {
                get_cat_name ();
            }

            ?>
        </h1>
    </div>

    <div style="margin:50px; width:fixed; background-color: aliceblue;">



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
                $iid= $_GET['id'];
                $sql1=mysqli_query($conn,"SELECT food_id,name,description,price FROM foods WHERE category_id=$iid");

                echo '<table style=width:100%; text-align:left;">';
                echo '<thead style="background-color: orange; height:50px;">';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>NAME</th>';
                echo '<TH>IMAGE</TH>';
                echo '<TH>DESCRIPTION</TH>';
                echo '<TH>PRICE</TH>';
                echo '<TH>CART</TH>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                while ($row = mysqli_fetch_row($sql1)) {
                    echo '<tr>';
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>"."<img src='../images/0$row[0] $row[1].jpg' width='100px' height='100px'>"."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>$".$row[3]."</td>";
                    echo "<td>"."<button style='padding:10px; background-color:orange; border-radius:10px;'><a style='text-decoration:none; color:black; font-weight:bold'href='#'>Add to cart</a></button>"."</td>";
                }

                echo '</tbody>';
                echo '</table>';
            }
        }
        ?>

    </div>

</body>

</html>