<?php
//Gets data from session created in searchItem.php
$name = $_SESSION['Name'];
$desc = $_SESSION['Description'];
$amountOff=  $_SESSION['AmountOff'];
$promoType = $_SESSION['PromoType'];
$promoCode =  $_SESSION['PromoCode'];

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Promo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<div>
    <div class="container"
    <div class = "form-group">
        <h1>Update a Promotion </h1>
        <form method="POST" action="UpdatePromotion.php" name ="myForm">

            <label>Promo Code:</label>
            <input class ="form-control form-control-sm col-md-4" value ="<?php echo $promoCode?>" name="promoCode">
            <p></p>

            <label>Name:</label>
            <input class ="form-control form-control-sm col-md-4" type = "text" value = "<?php  echo ($name)?>" name="name">
            <p></p>

            <label>Description:</label>
            <input class ="form-control form-control-sm col-md-4"value ="<?php echo $desc?>" name="description">
            <p></p>

            <label>Amount Off:</label>
            <input class ="form-control form-control-sm col-md-4" value = "<?php echo $amountOff?>" name="amountOff">
            <p></p>

            <label>Promotion Type(Must be Percent or Dollar):</label>
            <input class ="form-control form-control-sm col-md-4" value = "<?php echo $promoType?>" name="promoType">


            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-danger">
        </form>
    </div>
</div>
</body>
</html>
