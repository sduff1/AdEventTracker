<?php

require('configuration/database.php');
require('includes/header.php');
require('addItemtoPromotion.php');

/**
 *HTML file to accept user form data
 */
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add an Item to a Promotion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="form-group">

        <h1>Add an Item to a Promotion</h1>

        <form method="POST" action="addItemtoPromotionForm.php">

            <label>ID:</label>
            <input type="text" name="ID" class="form-control">

            <label>Promo Code:</label>
            <input type="text" name="promoCode" class="form-control">

            <label>Item Number:</label>
            <input type="text" name="itemNumber" class="form-control">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>
    </div>
</div>

</body>
</html>
