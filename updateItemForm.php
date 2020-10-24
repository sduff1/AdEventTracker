<?php
require('configuration/database.php');
require('includes/header.php');
require('updateItem.php');

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
    <title>Update Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Update an Item</h1>

        <form method="POST" action="updateItemForm.php">

            <label>Enter Item Number of Item You Wish To Update</label>
            <input type = "text" name="number" class="form-control">

            <label>Item Description</label>
            <input type = "text" name="description" class="form-control">

            <label>Item Category</label>
            <input type = "text" name="category" class="form-control">

            <label>Item Department Name</label>
            <input type = "text" name="department" class="form-control">

            <label>Item Purchase Cost</label>
            <input type = "text" name="cost" class="form-control">

            <label>Item Full Retail Cost</label>
            <input type = "text" name="retail_cost" class="form-control">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-danger">

        </form>
    </div>
</div>

</body>
</html>

