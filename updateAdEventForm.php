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

    <script type = "text/javascript">
        // Form validation for the following fields will come below ex. number,description etc.
        function vvalidate() {

            if (document.myForm.event_code.value == "") {
                alert("Please provide the event code!");
                document.myForm.event_code.focus();
                return false;
            }

            return (true);
        }
    </script>

</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Update Ad Event</h1>

        <form method="POST" action="updateAdEventForm.php" name ="myForm" onsubmit = "return(vvalidate());">

            <label>Enter Event Code of the Event You Wish To Update</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="event_code">
            <p></p>

            <label>Name:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="name">
            <p></p>

            <label>Start Date:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="start_date">
            <p></p>

            <label>End Date:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="end_date">
            <p></p>

            <label>Description:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="description">
            <p></p>

            <label>Type:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="type">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-danger">

        </form>
    </div>
</div>

</body>
</html>
