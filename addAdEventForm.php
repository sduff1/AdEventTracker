<?php
require('configuration/database.php');
require('includes/header.php');
require('addAdEvent.php');

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
    <title>Add Ad Event </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/backdrop.css">
    <script type = "text/javascript">
        // Form validation for the following fields will come below ex. number,description etc.
        function tvalidate() {

            if (document.myForm.event_code.value == "") {
                alert("Please provide the event code!");
                document.myForm.event_code.focus();
                return false;
            }

            if (document.myForm.name.value == "") {
                alert("Please provide the name!");
                document.myForm.name.focus();
                return false;
            }

            if (document.myForm.start_date.value == "") {
                alert("Please provide the start date!");
                document.myForm.start_date.focus();
                return false;
            }
            if (document.myForm.end_date.value == "") {
                alert("Please provide the end date!");
                document.myForm.end_date.focus();
                return false;
            }
            if (document.myForm.description.value == "") {
                alert("Please provide the description!");
                document.myForm.description.focus();
                return false;
            }
            if (document.myForm.type.value == "") {
                alert("Please provide the type!");
                document.myForm.type.focus();
                return false;
            }

            return (true);
        }

    </script>
</head>
<body>
<div class="container">

    <div class="form-group">

        <h1>Add Ad Event</h1>

        <form method="POST" action="addAdEventForm.php"  name ="myForm" onsubmit = "return(tvalidate());">

            <label>Event Code:</label>
            <input class ="form-control form-control-sm col-md-4" type="text" name="event_code" class="form-control">
            <p></p>

            <label>Name:</label>
            <input class ="form-control form-control-sm col-md-4" type="text" name="name" class="form-control">
            <p></p>

            <label>Start Date:</label>
            <input class ="form-control form-control-sm col-md-4" type="date" name="start_date" class="form-control">
            <p></p>

            <label>End Date:</label>
            <input class ="form-control form-control-sm col-md-4" type="date" name="end_date" class="form-control">
            <p></p>

            <label>Description:</label>
            <input class ="form-control form-control-sm col-md-4" type="text" name="description" class="form-control">
            <p></p>

            <label>Type:</label>



            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="type" value="Percentage" checked>
                <label class="form-check-label" >
                    Percent
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="type"  value="Dollar">
                <label class="form-check-label" >
                    Dollar
                </label>
            </div>



            <p></p>
<!---->
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-light">

        </form>
    </div>
</div>

</body>
</html>
