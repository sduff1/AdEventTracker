<?php
//Need the connection to the server and database which is why it requires database.php
require('../configuration/database.php');

//Needs the item.php to create Item object


//if submit has been clicked
if (isset($_POST['submit'])) {
    if(isset($_POST['code'])){
        $code = mysqli_real_escape_string($conn, $_POST['code']);

        $query = "SELECT * FROM promotion WHERE PromoCode = {$code}";

        $result = mysqli_query($conn, $query) or die ("Error: " . mysqli_error($conn));


        while ($row = mysqli_fetch_array($result)) {
            //print_r($row);
            $name = $row['Name'];
            $desc = $row['Description'];
            $amountOff = $row['AmountOff'];
            $promoType = $row['PromoType'];
            $promoCode = $row['PromoCode'];


            //Creating session to be used in updateFormWItemValues.php
            //Gets data from session created in searchItem.php

            //Create session variable to be used in searchItemTable.php
            $_SESSION['Name'] = $name;
            $_SESSION['Description'] = $desc;
            $_SESSION['AmountOff'] = $amountOff;
            $_SESSION['PromoType'] = $promoType;
            $_SESSION['PromoCode'] = $promoCode;

            require('updatePFormWPValues.php');

        }

        if (!mysqli_query($conn, $query)) {
            echo "Error: '.mysqli_error($conn)";
        }
    }



}





