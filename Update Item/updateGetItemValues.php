<?php
//Need the connection to the server and database which is why it requires database.php
require('../configuration/database.php');

//Needs the item.php to create Item object


//if submit has been clicked
if (isset($_POST['submit'])) {
    if(isset($_POST['number'])) {

        $number = mysqli_real_escape_string($conn, $_POST['number']);

        $query = "SELECT * FROM item WHERE item_number = {$number}";

        $result = mysqli_query($conn, $query) or die ("Error: " . mysqli_error($conn));

        while ($row = mysqli_fetch_array($result)) {
            //print_r($row);
            $number = $row['item_number'];
            $desc = $row['item_description'];
            $cat = $row['category'];
            $dept = $row['department_name'];
            $purchaseCost = $row['purchase_cost'];
            $retailCost = $row['full_retail_price'];


            //Creating session to be used in updateFormWItemValues.php
            //Gets data from session created in searchItem.php

            //Create session variable to be used in searchItemTable.php
            $_SESSION['item_number'] = $number;
            $_SESSION['item_description'] = $desc;
            $_SESSION['category'] = $cat;
            $_SESSION['department_name'] = $dept;
            $_SESSION['purchase_cost'] = $purchaseCost;
            $_SESSION['full_retail_cost'] = $retailCost;

            require('updateFormWItemValues.php');

        }

        if (!mysqli_query($conn, $query)) {
            echo "Error: '.mysqli_error($conn)";
        }
    }

}





