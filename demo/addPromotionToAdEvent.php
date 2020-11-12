<?php
//Need the connection to the server and database which is why it requires database.php
require('configuration/database.php');
require ('AdEventPromotion.php');

//if submit has been clicked
if(isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $eventcode = mysqli_real_escape_string($conn, $_POST['event_code']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);
    $result = mysqli_real_escape_string($conn, $_POST['promo']);

    //this checks if the user selected a promotion, or entered a different Promocode
    if ($result == 0) {
        $promocode = mysqli_real_escape_string($conn, $_POST['promocode']);//if $result=0, that means the Promocode was entered manually
    } else
        $promocode = $result; //This means the user selected a promotion

    //create AdEventPromotion
    $product = new AdEventPromotion("$id", "$promocode", "$eventcode", "$notes");
    $Id = $product->getID();
    $promoCode = $product->getPromocode();
    $eventCode = $product->getEventCode();
    $Notes = $product->getNotes();


    $check = mysqli_query($conn, "SELECT * from adevent WHERE event_code='$eventCode'");
    //Checks how many rows are in $check
    $checkRows = mysqli_num_rows($check);
    //if the number of rows is = 0 that means that the event code entered does not exist
    //Will not allow query to be processed

    $check1 = mysqli_query($conn, "SELECT * from adeventpromotion WHERE ID='$Id'");
    //Checks how many rows are in $check1
    $checkRows1 = mysqli_num_rows($check1);
    //if the number of rows is > 0 that means that the AdEventPromotion already exists
    //Will not allow query to be processed

    $check2 = mysqli_query($conn, "SELECT * from promotion WHERE PromoCode='$promoCode'");
    //Checks how many rows are in $check2
    $checkRows2 = mysqli_num_rows($check2);
    //if the number of rows is = 0 that means that the Promotion entered does not exist
    //Will not allow query to be processed




    if ($checkRows == 0) {
        echo '<script>alert("Could not add Ad Event Promotion, The Ad Event Code you entered does not exist.")</script>';
    }
    else if ($checkRows1 > 0){
        echo '<script>alert("Could not add Ad Event Promotion, The ID you entered already exists")</script>';
    }
    else if ($checkRows2 = 0){
        echo '<script>alert("Could not add Ad Event Promotion, The Promotion Code you entered does not exist.")</script>';
    }
    else { //Create the AdEventPromotion
        $query = "INSERT INTO produce.adeventpromotion (ID, PromoCode, EventCode, Notes) VALUES('$Id', '$promoCode','$eventCode','$Notes')";
        if (!mysqli_query($conn, $query)) {
            echo "Error: .mysqli_error()";
        } else {
            echo '<script>alert("AdEvent Promotion ' . $Id . ' has been added!")</script>';
        }
    }
}
