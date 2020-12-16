<?php
require('configuration/database.php');
require('includes/header.php');

/**
 *HTML file to accept user form data
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

        <h1>Search for a Promotion</h1>

        <form method="POST" action="searchPromotionForm.php">

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

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <p></p>

            <h1>Search for an Ad Event</h1>
            <h5>Enter the Event Code, Date Range, Name and/or Description of the Ad Event.</h5>
            <label>Event Code:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="event_code">
            <p></p>

            <label>Date Range:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="date_range">
            <p></p>

            <label>Name:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="event_name">
            <p></p>

            <label>Description:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="event_description">
            <p></p>

            <input type="submit" name="submit2" value="Submit" class="btn btn-primary">
            <p></p>

            <h5>Enter the Promotion Code and Event Code above,Notes below if wanted, and then click the button below to add the Promotion to the Ad Event.</h5>
            <label>Notes:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="notes">
            <p></p>
            <input type="submit" name="submit3" value="Submit" class="btn btn-danger">

        </form>
    </div>
</div>


<?php require('searchPromotion.php') ?>


</body>
</html>