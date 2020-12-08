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
    <script type = "text/javascript">
        // Form validation for the following fields will come below ex. number,description etc.
        function tvalidate() {

            if (document.myForm.name.value == "") {
                alert("Please provide the item name!");
                document.myForm.Name.focus();
                return false;
            }

            if (document.myForm.description.value == "") {
                alert("Please provide the item description!");
                document.myForm.description.focus();
                return false;
            }

            if (document.myForm.amountOff.value == "") {
                alert("Please provide the amount off!");
                document.myForm.amountOff.focus();
                return false;
            }
            if (document.myForm.type.value == "") {
                alert("Please provide the type!");
                document.myForm.type.focus();
                return false;
            }
            if (document.myForm.cost.code == "") {
                alert("Please provide the items' promo code!");
                document.myForm.cost.focus();
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

            <label>Promotion Name</label>
            <input type = "text" name="name" class="form-control">

            <label>Description</label>
            <input type = "text" name="description" class="form-control">

            <label>Amount Off</label>
            <input type = "text" name="amountOff" class="form-control">

            <br>

            <label>Type</label>
            <select name="type" id="type">
                <option value="Dollar">Dollar</option>
                <option value="Percent">Percent</option>
            </select>

            <br>

            <label>Promo Code</label>
            <input type = "text" name="code" class="form-control">


            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>
    </div>
</div>

</body>
</html>
