<?php



$code = $_SESSION['event_code'];
$name = $_SESSION['name'];
$start =  $_SESSION['start_date'];
$end = $_SESSION['end_date'];
$desc =  $_SESSION['description'];
$promos = $_SESSION['promos'];


?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<br>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Ad Event Code</th>
        <th scope="col">Ad Event Name</th>
        <th scope="col">Ad Event Start Date</th>
        <th scope="col">Ad Event End Date</th>
        <th scope="col">Description</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo $code?></th>
        <td><?php echo $name?></td>
        <td><?php echo $start?></td>
        <td><?php echo $end?></td>
        <td><?php echo $desc?></td>
    </tbody>
</table>
<br>
<h2>Promotions</h2><form method="POST" action="addPromotionToAdEventForm.php">
    <input type="hidden" id="code" name="code" value="<?php echo $code?>" />
    <input type="submit" value="add a new Promotion" />
</form>
<div>

<?php

 for ($i = 0; $i < count($promos); $i++){
     echo '<form method ="POST" action="addPromotionToAdEvent.php">';
     echo '<input type="hidden" id="code" name="code" value="'.getPromotion($promos[$i])->getCode().'" />';
     echo '<input type="hidden" id="event" name="event" value="'.$code.'" />';
      echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo    '<th scope="col">Promotion Name</th>';
    echo   '<th scope="col">Description</th>';
    echo    '<th scope="col">Amount Off</th>';
    echo    '<th scope="col">Type</th>';
    echo    '<th scope="col">Promotion Code</th>';
     echo    '<th scope="col"><input type="submit" name="Remove" value="Remove"/></th>';

    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo    '<th scope="row">'.getPromotion($promos[$i])->getName().'</th>';
    echo    '<td>'.getPromotion($promos[$i])->getDescription().'</td>';
    echo    '<td>'.getPromotion($promos[$i])->getAmountOff().'</td>';
    echo    '<td>'.getPromotion($promos[$i])->getType().'</td>';
    echo    '<td>'.getPromotion($promos[$i])->getCode().'</td>';
    echo '</tbody>';
    echo '</table>';
    echo '</form>';
       $promoitem = promoitems($promos[$i]['PromoCode']);
     for ($a = 0; $a < count($promoitem); $a++){
         echo '<table class="table">';
         echo '<thead>';
         echo '<tr>';
         echo    '<th scope="col">Item Number</th>';
         echo   '<th scope="col">Item Description</th>';
         echo    '<th scope="col">Category</th>';
         echo    '<th scope="col">Department Name</th>';
         echo    '<th scope="col">Purchase Cost</th>';
         echo    '<th scope="col">Full Retail Price</th>';

         echo '</tr>';
         echo '</thead>';
         echo '<tbody>';
         echo '<tr>';
         echo    '<th scope="row">'.getItem($promoitem[$a])->getItemNumber().'</th>';
         echo    '<td>'.getItem($promoitem[$a])->getDescription().'</td>';
         echo    '<td>'.getItem($promoitem[$a])->getCategory().'</td>';
         echo    '<td>'.getItem($promoitem[$a])->getDepartment().'</td>';
         echo    '<td>'.getItem($promoitem[$a])->getCost().'</td>';
         echo    '<td>'.getItem($promoitem[$a])->getRetailCost().'</td>';
         echo '</tbody>';
         echo '</table>';






     }
     $promocode=getPromotion($promos[$i])->getCode();
     echo '<form method="POST" action="addPromotionItemsForm.php">';
    echo '<input type="hidden" id="promo" name="promo" value="'.$promocode.'" />';
    echo '<input type="submit" name="submit" value="add a new Item" />';
    echo '</form>';
     echo '</br></br>';


}

?>
</div>
</body>
</html>