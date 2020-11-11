<?php

//Need the connection to the server and database which is why it requires database.php
require('configuration/database.php');

//Needs the Promotion.php to create Promotion object
require('Promotion.php');

//if submit has been clicked
if (isset($_POST['submit'])) {
    //Get form data using $_POST
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $aOff = mysqli_real_escape_string($conn, $_POST['amountOff']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $event = mysqli_real_escape_string($conn, $_POST['event']);

    //Create Promotion object from data collected
    $product = new Promotion("$name", "$description", "$aOff", "$type", "$code");

    //Getter methods to retrieve properties of the Object created
    $pname = $product->getName();
    $pdesc= $product->getDescription();
    $paOff = $product->getAmountOff();
    $ptype= $product->getType();
    $pcode = $product->getCode();
    $pevent= $product->getEvent();

    //Updates row in the Promotion table where the code in table matches the promo code provided by the user
    $query = "UPDATE Promotion SET name ='$pname',description = '$pdesc', amountOff = '$paOff', type = '$ptype', event '$pevent' WHERE code = {$pcode}";

    //Alerts user that the Promotion has been updated
    echo '<script>alert("Promotion has been updated")</script>';

    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($conn)";
    }

}