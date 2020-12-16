<?php
//session_start();


//Gets data from session created in searchPromotion.php
$event_code = $_SESSION['event_code'];
$event_name = $_SESSION['name'];
$event_start =  $_SESSION['start_date'];
$event_end = $_SESSION['end_date'];
$event_description =  $_SESSION['description'];
$event_type = $_SESSION['type'];


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
        <th scope="col">Event Code:</th>
        <th scope="col">Name:</th>
        <th scope="col">Start Date:</th>
        <th scope="col">End Date:</th>
        <th scope="col">Description:</th>
        <th scope="col">Type:</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo $event_code?></th>
        <td><?php echo $event_name?></td>
        <td><?php echo $event_start?></td>
        <td><?php echo $event_end?></td>
        <td><?php echo $event_description?></td>
        <td><?php echo $event_type?></td>
    </tbody>
</table>
</body>
</html>
