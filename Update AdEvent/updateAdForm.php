<?php
require('../configuration/database.php');
require('adHeader.php');
require('updateGetAdValues.php');

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
    <script type = "text/javascript">
        // Form validation for the following fields will come below ex. number,description etc.
        function validate() {
//Only including validation for an empty item number because it is the only necessary one to start with..
            if (document.myForm.event_code.value == "") {
                alert("Please provide the item number!");
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

        <h1>Update an Ad Event</h1>

        <form method="POST" action="updateAdForm.php" name ="myForm" onsubmit = "return(validate());">

            <label>Enter Event Code of the Event You Wish To Update</label>
            <input type = "text" name="event_code" class="form-control">

            <p></p>
            <input type = "submit" name = "submit" value ="Submit" class="btn btn-primary">

            <!--            <input type="submit" name="submit" value="Submit" class="btn btn-danger">-->

        </form>
    </div>
</div>

</body>
</html>
