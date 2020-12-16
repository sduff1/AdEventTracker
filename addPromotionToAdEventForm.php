<?php
require('configuration/database.php');
require('includes/header.php');

//Get item number entered by user
if(isset($_POST['code'])) {
    $event = mysqli_real_escape_string($conn, $_POST['code']);
///echo $number;
//Create query
    $query = "SELECT * FROM adevent WHERE event_code = '$event'";
//Get result
    $result = mysqli_query($conn, $query);
//Fetch data
    $post = mysqli_fetch_assoc($result);
//Get specific data from database
    $code = $post['event_code'];
    $name = $post['name'];
    $start = $post['start_date'];
    $end = $post['end_date'];
    $desc = $post['description'];
    $set=true;
    $input= '<label>Event Code: '.$code.'</label><input type="hidden" name="event_code" value="'.$code.'" class="form-control">';
}
else
{
    $result1 = mysqli_query($conn, "SELECT * FROM produce.adevent");


    $sql_columns_name1 = "SHOW COLUMNS FROM produce.adevent";

    $sql_columns_result1 = mysqli_query($conn,$sql_columns_name1);

    $column_arr1 = array();

    $code_arr = array();

    while($row = mysqli_fetch_array($sql_columns_result1)){
        $column_arr1[] = $row['Field'];
    }
    $a = 0;
    while ($row = mysqli_fetch_array($result1)) {
        $code_arr[$a] = $row[$column_arr1[0]];
        $name_arr[$a] = $row[$column_arr1[1]];
        $a++;
    }
    $set=false;
}
$x = 1;
while ((mysqli_query($conn, "SELECT ID FROM produce.adeventpromotion WHERE ID = '$x'")->num_rows != 0))
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

        <h1>Add a Promotion to an Ad Event</h1>

        <form method="POST" action="addPromotionToAdEvent.php">

            <label>Id: <?php echo $id?></label>
            <input type="hidden" name="id" value="<?php echo $id?>" class="form-control">
            <br>

            <?php if($set==true) {echo $input;}
                else{echo '<label for="event_code">Choose an Ad Event:</label><select name="event_code" id="event_code">';
                    for($o = 0; $o < count($code_arr); $o++){
                        echo '<option value="'.$code_arr[$o].'">'.$code_arr[$o] ."-". $name_arr[$o].'</option>';}
                    echo '</select>';}?>

            <br>
            <h3>Select a Promotion from the table below:</h3>

                <?php

                $result = mysqli_query($conn, "SELECT * FROM produce.promotion");


                $sql_columns_name = "SHOW COLUMNS FROM produce.promotion";

                $sql_columns_result = mysqli_query($conn,$sql_columns_name);

                $column_arr = array();

                while($row = mysqli_fetch_array($sql_columns_result)){
                    $column_arr[] = $row['Field'];
                }

                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">Select</th>';
                echo '<th scope="col">Promotion Name</th>';
                echo '<th scope="col">Description</th>';
                echo '<th scope="col">Amount Off</th>';
                echo '<th scope="col">Type</th>';
                echo '<th scope="col">Code</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo   '<td><input type = "radio" name = "promo" value="'.$row[$column_arr[4]].'" class="form-control" />&nbsp;</td>>';
                    for ($i=0; $i < count($column_arr); $i++) {

                        echo "<td>".$row[$column_arr[$i]]."</td>";

                    }

                    echo "</tr>";
                }


                ?>
            <tr>
                <td><input type="submit" name="addnew" value="addnew" class="btn btn-primary"></td>
                <td><input class ="form-control form-control-sm col-md-4" type = "text" name="name"></td>
                <td><input class ="form-control form-control-sm col-md-4" type = "text" name="description"></td>
                <td><input class ="form-control form-control-sm col-md-4" type = "text" name="amountOff"></td>
                <td><input class ="form-control form-control-sm col-md-4" type = "text" name="type"></td>
                <td><input class ="form-control form-control-sm col-md-4" type = "text" name="code"></td>
            </tr>



            </tbody>
            </table>
            <label>Notes</label>
            <input type="text" name="notes" class="form-control">


            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>
    </div>

</div>

</body>

</html>
