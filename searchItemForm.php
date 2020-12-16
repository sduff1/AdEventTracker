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
    <link rel="stylesheet" href="css/backdrop.css">
</head>

<body>
<div class ="container">

    <div class="form-group">

        <h1>Search for an Item</h1>

        <form method="POST" action="searchItemForm.php">

            <h5>Enter the Item Number, Name, Category and/or Description of the Item.</h5>
            <label>Item Number:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="number">
            <p></p>

            <label>Description:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="item_description">
            <p></p>

            <label>Category:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="category">
            <p></p>

            <label>Department:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="department">
            <p></p>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <p></p>

            <h1>Search for a Promotion</h1>
            <h5>Enter the Promotion Code, Name, and/or Description of the Promotion you want to search for.</h5>
            <label>Promotion Code:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="code">
            <p></p>

            <label>Name:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="name">
            <p></p>

            <label>Description:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="description">
            <p></p>

            <input type="submit" name="submit2" value="Submit" class="btn btn-primary">
            <p></p>

            <h5>Enter the Item Number and Promotion Code above, and then click the button below to add the item to the Promotion.</h5>
            <p></p>
            <input type="submit" name="submit3" value="Submit" class="btn btn-danger">

        </form>
    </div>
</div>

<?php require ('searchItem.php')?>

</body>
</html>
