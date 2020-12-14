<?php
require('configuration/database.php');
require('includes/header.php');
require('addPromotion.php');

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
    <title>Add a Promotion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/backdrop.css">
    <script type = "text/javascript">
        // Form validation for the following fields will come below ex. number,description etc.
        function tvalidate() {

            if (document.myForm.name.value == "") {
                alert("Please provide the promotion name!");
                document.myForm.name.focus();
                return false;
            }

            if (document.myForm.description.value == "") {
                alert("Please provide the promotion description!");
                document.myForm.description.focus();
                return false;
            }

            if (document.myForm.amountOff.value == "") {
                alert("Please provide the amount off!");
                document.myForm.amountOff.focus();
                return false;
            }

            if (document.myForm.code.code == "") {
                alert("Please provide the promo code!");
                document.myForm.code.focus();
                return false;
            }


            return (true);
        }


    </script>
</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Add a Promotion</h1>

        <form method="POST" action="addPromotionForm.php"  name ="myForm" onsubmit = "return(tvalidate());">

            <label>Promotion Name:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="name" class="form-control">
            <p></p>

            <label>Description:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="description" class="form-control">
            <p></p>

            <label>Amount Off:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="amountOff" class="form-control">
            <p></p>

            <br>

            <label>Type</label>
            <select name="type" id="type">
                <option value="Dollar">Dollar</option>
                <option value="Percent">Percent</option>
            </select>

            <br>

            <label>Promo Code:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" name="code" class="form-control">


            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-outline-light">

        </form>
    </div>
</div>

</body>
</html>
