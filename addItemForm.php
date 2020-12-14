<?php
require('configuration/database.php');
require('includes/header.php');
require('addItem.php');

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
    <title>Add an Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/backdrop.css">
    <script type = "text/javascript">
        // Form validation for the following fields will come below ex. number,description etc.
        function tvalidate() {

            if (document.myForm.number.value == "") {
                alert("Please provide the item number!");
                document.myForm.number.focus();
                return false;
            }

            if (document.myForm.description.value == "") {
                alert("Please provide the item description!");
                document.myForm.description.focus();
                return false;
            }

            if (document.myForm.category.value == "") {
                alert("Please provide the category!");
                document.myForm.category.focus();
                return false;
            }
            if (document.myForm.department.value == "") {
                alert("Please provide the department!");
                document.myForm.department.focus();
                return false;
            }
            if (document.myForm.cost.value == "") {
                alert("Please provide the item cost!");
                document.myForm.cost.focus();
                return false;
            }
            if (document.myForm.number.value == "") {
                alert("Please provide the items' full retail cost!");
                document.myForm.number.focus();
                return false;
            }

            return (true);
        }


    </script>
</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Add an Item</h1>

        <form method="POST" action="addItemForm.php" name ="myForm" onsubmit = "return(tvalidate());">

            <label>Item Number:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="number" class="form-control">
            <p></p>

            <label>Item Description:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="description" class="form-control">
            <p></p>

            <label>Item Category:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="category" class="form-control">
            <p></p>

            <label>Item Department Name:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="department" class="form-control">
            <p></p>

            <label>Item Purchase Cost:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="cost" class="form-control">
            <p></p>

            <label>Item Full Retail Cost:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="retail_cost" class="form-control">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-outline-light">

        </form>
    </div>
</div>

</body>
</html>
