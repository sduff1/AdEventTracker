<?php
require('../configuration/database.php');
require('reportsHeader.php');

/**
 *HTML file to accept user form data give a report after
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search for a Promotion by Date</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/backdrop.css">
</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Promotion Reporting</h1>

        <form method="POST" action="promoByDateReport.php">

            <h5>Search for all promotions associated with a certain <strong>date</strong></h5>

            <label>Select a Date</label>
            <input class ="form-control form-control-sm col-md-4" type="date" name="date" class="form-control">
            <p></p>

            <input type="submit" name="submit" value="Search" class="btn btn-primary">
            <p></p>

        </form>
    </div>
</div>


<?php require('promotionsByDate.php') ?>


</body>
</html>