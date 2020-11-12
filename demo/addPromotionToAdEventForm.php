<?php
require('configuration/database.php');
require('includes/header.php');

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
    <title>Add Promotion to Add Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container">

    <div class="form-group">

        <h1>Add a Promotion to an Ad Event</h1>

        <form method="POST" action="addPromotionToAdEventForm.php">

            <label>Enter Id:</label>
            <input type="text" name="id" class="form-control">

            <label>Event Code:</label>
            <input type="text" name="event_code" class="form-control">

            <label>Enter a promotion code</label>
            <input type="radio" id="0" name="promo" value="0"/><input type="text" name="promocode" class="form-control">
            <label>Or select a promotion from the table below:</label>

            <table class="table" >
                <thead>
                <tr>
                    <th scope="col">Select</th>
                    <th scope="col">Promotion Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount Off</th>
                    <th scope="col">Type</th>
                    <th scope="col">Code</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="radio" id="10p" name="promo" value="10"/></td>
                    <td>10% off</td>
                    <td>10% off the specific item</td>
                    <td>10</td>
                    <td>Percent</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td><input type="radio" id="20p" name="promo" value="20"/></td>
                    <td>20% off</td>
                    <td>20% off the specific item</td>
                    <td>20</td>
                    <td>Percent</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td><input type="radio" id="25p" name="promo" value="25"/></td>
                    <td>25% off</td>
                    <td>25% off the specific item</td>
                    <td>25</td>
                    <td>Percent</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td><input type="radio" id="50p" name="promo" value="50"/></td>
                    <td>50% off</td>
                    <td>50% off the specific item</td>
                    <td>50</td>
                    <td>Percent</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td><input type="radio" id="5d" name="promo" value="57"/></td>
                    <td>$5 off</td>
                    <td>$5 off the specific item</td>
                    <td>$5</td>
                    <td>Dollar</td>
                    <td>57</td>
                </tr>
                <tr>
                    <td><input type="radio" id="10d" name="promo" value="107"/></td>
                    <td>$10 off</td>
                    <td>$10 off the specific item</td>
                    <td>$10</td>
                    <td>Dollar</td>
                    <td>107</td>
                </tr>
                <tr>
                    <td><input type="radio" id="20d" name="promo" value="207"/></td>
                    <td>$20 off</td>
                    <td>$20 off the specific item</td>
                    <td>$20</td>
                    <td>Dollar</td>
                    <td>207</td>
                </tr>
                </tbody>

            </table>




            <label>Notes</label>
            <input type="text" name="notes" class="form-control">


            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>
    </div>

</div>
<?php require('addPromotionToAdEvent.php');?>
</body>

</html>
