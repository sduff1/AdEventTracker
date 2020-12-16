<?php
//session_start();


//Gets data from session created in searchItem.php
$num = $_SESSION['item_number'];
$desc = $_SESSION['item_description'];
$cat =  $_SESSION['category'];
$dept = $_SESSION['department_name'];
$cost =  $_SESSION['purchase_cost'];
$retailCost = $_SESSION['full_retail_cost'];


//HTML file creates a table
//Populated with elements from database
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/backdrop.css">

</head>
<body>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Item Number</th>
            <th scope="col">Item Description</th>
            <th scope="col">Category</th>
            <th scope="col">Department Name</th>
            <th scope="col">Purchase Cost</th>
            <th scope="col">Full Retail Cost</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?php echo $num?></th>
            <td><?php echo $desc?></td>
            <td><?php echo $cat?></td>
            <td><?php echo $dept?></td>
            <td><?php echo $cost?></td>
            <td><?php echo $retailCost?></td>
        </tbody>
    </table>
</body>
</html>
