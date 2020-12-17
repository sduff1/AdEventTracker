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
    <title>Search for a Promotion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/backdrop.css">
</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Promotion Reporting</h1>

        <form method="POST" action="amountTypePromoReport.php">

            <h5>Search for all promotions associated with a certain <strong>amount</strong> off and <strong>type</strong> value.</h5>

            <label>Amount Off:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="amountoff">
            <p></p>

            <label>Type:</label>
            <select name="promotype" id="promotype">
                <option value="Dollar">Dollar</option>
                <option value="Percent">Percent</option>
            </select>
            <p></p>

            <input type="submit" name="submit" value="Search" class="btn btn-primary">
            <p></p>

        </form>
    </div>
</div>


<?php require('promoReport.php') ?>


</body>
</html>