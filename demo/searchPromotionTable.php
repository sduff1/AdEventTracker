<?php
//session_start();


//Gets data from session created in searchItem.php
$name = $_SESSION['Name'];
$desc = $_SESSION['Description'];
$aOff =  $_SESSION['AmountOff'];
$type = $_SESSION['Type'];
$code =  $_SESSION['Code'];
$event =  $_SESSION['Event'];

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
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Promotion Name</th>
        <th scope="col">Description</th>
        <th scope="col">Amount Off</th>
        <th scope="col">Type</th>
        <th scope="col">Code</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo $name?></th>
        <td><?php echo $desc?></td>
        <td><?php echo $aOff?></td>
        <td><?php echo $type?></td>
        <td><?php echo $code?></td>
    </tbody>
</table>
</body>
</html>