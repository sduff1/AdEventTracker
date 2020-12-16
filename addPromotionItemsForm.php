<?php
require('configuration/database.php');
require('includes/header.php');

//Get item number entered by user

if($_POST['promo']>0) {
    $event = mysqli_real_escape_string($conn, $_POST['promo']);
    $query = "SELECT * FROM promotion WHERE PromoCode = '$event'";
//Get result
    $result = mysqli_query($conn, $query);
//Fetch data
    $post = mysqli_fetch_assoc($result);
//Get specific data from database
    $code = $post['PromoCode'];
    $name = $post['Name'];
    $description = $post['Description'];
    $aoff = $post['AmountOff'];
    $type = $post['PromoType'];
    $input ='<label>PromoCode: '.$code.'</label><input type="hidden" name="promoCode" value="'.$code.'" class="form-control">';
    $set = true;
}
else{
    $set = false;
    $code = 0;
    $input = '<label>PromoCode: </label><input type="text" name="promoCode" class="form-control">';
}
$x = 1;
while ((mysqli_query($conn, "SELECT ID FROM produce.promotionitem WHERE ID = '$x'")->num_rows != 0))
{
    $x++;
}

$id = $x;



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Promotion to Add Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container">

    <div class="form-group">

        <h1>Add Items To Promotion</h1>

        <form method="POST" action="addItemtoPromotion.php">

            <label>Id: <?php echo $id?></label>
            <input type="hidden" name="ID" value="<?php echo $id?>" class="form-control">
            <br>

            <?php echo $input;?>
            <br>
            <h3>Select an Item to add</h3>
            <table class="table" >
                <thead>
                <tr>
                    <th scope="col">Select</th>
                    <th scope="col">Item Number</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Department</th>
                    <th scope="col">Purchase Cost</th>
                    <th scope="col">Full retail Price</th>

                </tr>
                </thead>
                <tbody>

                <?php

                $result = mysqli_query($conn, "SELECT * FROM produce.item");


                $sql_columns_name = "SHOW COLUMNS FROM produce.item";

                $sql_columns_result = mysqli_query($conn,$sql_columns_name);

                $column_arr = array();

                while($row = mysqli_fetch_array($sql_columns_result)){
                    $column_arr[] = $row['Field'];
                }
                while ($row = mysqli_fetch_array($result)) {
                    $itemnum = $row[$column_arr[0]];
                    if((mysqli_query($conn, "SELECT ItemNumber FROM produce.promotionitem WHERE ItemNumber = '$itemnum' AND PromoCode = '$code'")->num_rows == 0)){
                        echo "<tr>";
                        echo '<td><input type = "radio" name = "itemNumber" value="' . $itemnum . '" class="form-control" />&nbsp;</td>>';
                        for ($i = 0; $i < count($column_arr); $i++) {
                            echo "<td>" . $row[$column_arr[$i]] . "</td>";
                        }
                        echo "</tr>";
                    }
                }





                ?>
                <tr>
                    <td><input type="submit" name="addnew" value="addnew" class="btn btn-primary"></td>
                    <td><input class ="form-control form-control-sm col-md-4" type = "text" name="number"></td>
                    <td><input class ="form-control form-control-sm col-md-4" type = "text" name="description"></td>
                    <td><input class ="form-control form-control-sm col-md-4" type = "text" name="category"></td>
                    <td><input class ="form-control form-control-sm col-md-4" type = "text" name="department"></td>
                    <td><input class ="form-control form-control-sm col-md-4" type = "text" name="cost"></td>
                    <td><input class ="form-control form-control-sm col-md-4" type = "text" name="retailcost"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>

            </table>


            <p></p>
            <input type ="hidden" name="promoCode" value="<?php echo $code?>">
            <input type="submit" name="submit" value="submit" class="btn btn-primary">


        <br>
            <?php
            if($set==true) {
                echo '<h3>Current Promotion Items</h3>';
                echo '<table class="table" >';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">Select</th>';
                echo '<th scope="col">Item Number</th>';
                echo '<th scope="col">Item Name</th>';
                echo '<th scope="col">Category</th>';
                echo '<th scope="col">Department</th>';
                echo '<th scope="col">Purchase Cost</th>';
                echo '<th scope="col">Full retail Price</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                $result = mysqli_query($conn, "SELECT * FROM produce.item");
                $sql_columns_name = "SHOW COLUMNS FROM produce.item";
                $sql_columns_result = mysqli_query($conn, $sql_columns_name);
                $column_arr = array();
                while ($row = mysqli_fetch_array($sql_columns_result)) {
                    $column_arr[] = $row['Field'];
                }
                while ($row = mysqli_fetch_array($result)) {
                    $itemnum = $row[$column_arr[0]];
                    if ((mysqli_query($conn, "SELECT ItemNumber FROM produce.promotionitem WHERE ItemNumber = '$itemnum' AND PromoCode = '$code'")->num_rows != 0)) {
                        echo '<tr>';
                        echo '<td><input type = "radio" name = "itemNumber" value="' . $itemnum . '" class="form-control" />&nbsp;</td>>';
                        for ($i = 0; $i < count($column_arr); $i++) {
                            echo '<td>' . $row[$column_arr[$i]] . '</td>';
                        }
                        echo '</tr>';
                    }
                }
                echo '</tbody>';
                echo '</Table>';
                echo '<input type="submit" name="Remove" value="Remove" class="btn btn-primary">';
                echo '</form>';
            }
        ?>
        <br>
        <a href="adEventViewerForm.php">Back to AdEvent Viewer</a>
    </div>

</div>
</body>
</html>

