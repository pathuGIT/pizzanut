<?php require_once('../inc/connect.php')?>
<?php require_once('../inc/admin-header.php')?>

<div class='w3-container '>
    <form action="" method="post">
        <table>
            <tr>
                <td>Enter Food Name: </td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Enter Food Description: </td>
                <td><input type="text" name="fdesc"></td>
            </tr>
            <tr>
                <td>Enter Food Price: </td>
                <td><input type="text" name="fprice"></td>
            </tr>
            <tr>
                <td>Choose Food Category: </td>
                <td>
                    <select name="fctgry" id="">
                        <option value="1">Pizza</option>
                        <option value="2">Burger</option>
                        <option value="3">Pasta</option>
                        <option value="4">Salads</option>
                        <option value="5">Dessarts</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="ADD"></td>
                <td><input type="reset" value="CLEAR"></td>
            </tr>
        </table>
    </form>
</div>

<?php

ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form has been submitted, process the data

    $fname = $_POST["fname"];
    $fdescrip = $_POST["fdesc"];
    $fprice = $_POST["fprice"];
    $fctgry = $_POST["fctgry"];

    $food_add = "INSERT INTO foods VALUES ('','$fname','$fdescrip',$fprice,$fctgry)";
    $add_result = mysqli_query($conn,$food_add);

    if ($add_result) {
        echo "<script>window.location.href = '../admin/food.php';</script>";
        exit;
    } else {
        echo "Not Updated";
    }
}

ob_end_flush();

?>