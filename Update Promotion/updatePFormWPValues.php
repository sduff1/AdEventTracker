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

            <label>Promo Code</label>
            <input value ="<?php echo $promoCode?>" name="promoCode" class="form-control">

            <label>Name</label>
            <input type = "text" value = "<?php  echo ($name)?>" name="name" class="form-control">

            <label>Description</label>
            <input value ="<?php echo $desc?>" name="description" class="form-control">

            <label>Amount Off</label>
            <input value = "<?php echo $amountOff?>" name="amountOff" class="form-control">

            <label>Promotion Type(Must be Percent or Dollar)</label>
            <input value = "<?php echo $promoType?>" name="promoType" class="form-control">


            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-danger">
        </form>
    </div>
</div>
</body>
</html>
