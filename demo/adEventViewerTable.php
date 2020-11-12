<?php



$code = $_SESSION['event_code'];
$name = $_SESSION['name'];
$start =  $_SESSION['start_date'];
$end = $_SESSION['end_date'];
$desc =  $_SESSION['description'];
$promos[] = $_SESSION['promos'];


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
<body>
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
<?php

 for ($i = 0; $i < count($promos); $i++){
      echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo    '<th scope="col">Promotion Name</th>';
    echo   '<th scope="col">Description</th>';
    echo    '<th scope="col">Amount Off</th>';
    echo    '<th scope="col">Type</th>';
    echo    '<th scope="col">Promotion Code</th>';

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
       $promoitem = promoitems($promos[$i]);
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
         echo    '<th scope="row">'.getItem($promoitem)->getItemNumber().'</th>';
         echo    '<td>'.getItem($promoitem)->getDescription().'</td>';
         echo    '<td>'.getItem($promoitem)->getCategory().'</td>';
         echo    '<td>'.getItem($promoitem)->getDepartment().'</td>';
         echo    '<td>'.getItem($promoitem)->getCost().'</td>';
         echo    '<td>'.getItem($promoitem)->getRetailCost().'</td>';
         echo '</tbody>';
         echo '</table>';






     }



     require ('adEventViewer.php');
}

?>
</body>
</html>