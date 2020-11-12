<?php
require('configuration/database.php');
require('includes/header.php');
require('updateAdEvent.php');

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
    <title>Update Ad Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Update Ad Event</h1>

        <form method="POST" action="updateAdEventForm.php">

            <label>Enter Event Code of the Event You Wish To Update</label>
            <input type = "text" name="event_code" class="form-control">

            <label>Name:</label>
            <input type = "text" name="name" class="form-control">

            <label>Start Date:</label>
            <input type = "text" name="start_date" class="form-control">

            <label>End Date:</label>
            <input type = "text" name="end_date" class="form-control">

            <label>Description:</label>
            <input type = "text" name="description" class="form-control">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-danger">

        </form>
    </div>
</div>

</body>
</html>