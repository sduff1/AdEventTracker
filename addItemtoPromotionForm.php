<?php

require('configuration/database.php');
require('includes/header.php');
require('addItemtoPromotion.php');

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
    <title>Add an Item to a Promotion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/backdrop.css">
    <script type = "text/javascript">
        // Form validation for the following fields will come below ex. number,description etc.
        function tvalidate() {

            if (document.myForm.ID.value == "") {
                alert("Please provide the ID");
                document.myForm.ID.focus();
                return false;
            }

            if (document.myForm.promoCode.value == "") {
                alert("Please provide the promo code!");
                document.myForm.promoCode.focus();
                return false;
            }

            if (document.myForm.itemNumber.value == "") {
                alert("Please provide the item number!");
                document.myForm.itemNumber.focus();
                return false;
            }
            return (true);
        }


    </script>
</head>
<body>
<div class="container">

    <div class="form-group">

        <h1>Add an Item to a Promotion</h1>

        <form method="POST" action="addItemtoPromotionForm.php"  name ="myForm" onsubmit = "return(tvalidate());">

            <label>ID:</label>
            <input class ="form-control form-control-sm col-md-4" type="text" name="ID">
            <p></p>

            <label>Promo Code:</label>
            <input class ="form-control form-control-sm col-md-4" type="text" name="promoCode">
            <p></p>

            <label>Item Number:</label>
            <input class ="form-control form-control-sm col-md-4" type="text" name="itemNumber">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>
    </div>
</div>

</body>
</html>
