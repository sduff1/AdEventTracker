<?php

require('configuration/database.php');
require('includes/header.php');
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add an Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<div class ="container">

    <div class="form-group">

        <h1>View an Ad Event</h1>

        <form method="POST" action="adEventViewerForm.php">

            <label>Select An Ad Event</label>
            <?php

            $result = mysqli_query($conn, "SELECT * FROM produce.adevent");


            $sql_columns_name = "SHOW COLUMNS FROM produce.adevent";

            $sql_columns_result = mysqli_query($conn,$sql_columns_name);

            $column_arr = array();

            while($row = mysqli_fetch_array($sql_columns_result)){
                $column_arr[] = $row['Field'];
            }

            echo '<table>';
            echo '<tr>';
            echo '<th>&nbsp;&nbsp;&nbsp;</th>';
                echo '<th>Event Code</th>';
                echo '<th>Name</th>';
                echo '<th>Start Date</th>';
                echo '<th>End Date</th>';
                echo '<th>Description</th>';
            echo '</tr>';
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo   '<td><input type = "radio" name = "event_code" value="'.$row[$column_arr[0]].'" class="form-control" />&nbsp;</td>>';
                for ($i=0; $i < count($column_arr); $i++) {

                    echo "<td>".$row[$column_arr[$i]]."</td>";

                }

                echo "</tr>";
            }

            echo '</table>';

            ?>

            <p></p>
            <input type="submit" name="submit" value="submit" class="btn btn-primary">

        </form>
    </div>
</div>

<?php require ('adEventViewer.php')?>
</body>

</html>