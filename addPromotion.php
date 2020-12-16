<?php
//Need the connection to the server and database which is why it requires database.php
require ('configuration/database.php');

//Needs the item.php to create Item object
require ('Promotion.php');

/**
 * Method to get data in HTML form (addItemForm.php) is post
 * Fetches form data from addItemForm.php using $_POST
 *
 * Makes sure there are no duplicate Item Numbers being queried into the database
 */

//if submit has been clicked
if(isset($_POST['submit'])) {

    //Get form data using $_POST
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $aOff = mysqli_real_escape_string($conn, $_POST['amountOff']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $code = mysqli_real_escape_string($conn, $_POST['code']);

    //Create Item object from data collected
    $product = new Promotion("$name", "$description", "$aOff", "$type", "$code");


    //Getter methods to retrieve properties of the Object created
    $pname = $product->getName();
    $pdesc= $product->getDescription();
    $paOff = $product->getAmountOff();
    $ptype= $product->getType();
    $pcode = $product->getCode();

    //Get the elements from item_number column from item table, that matches the number provided by the user in the Item Number field of addItemForm.php
    $check = mysqli_query($conn,"SELECT * from promotion WHERE Name='$pname'");

    //Checks how many rows are in $check
    $checkRows=mysqli_num_rows($check);

    //if the number of rows is > 0 that means that there is at least an element in item_number column in the database that matches the number provided by user (THERE IS A DUPLICATE)
    //Will not allow query to be processed
    if ($checkRows>0){
        echo'<script>alert("Could not add Item! Item is already in system.")</script>';
    }else{
        //If there is no row, then it will process the query
        $query = "INSERT INTO promotion(Name, Description, AmountOff, PromoType, PromoCode) VALUES('$pname', '$pdesc','$paOff','$ptype', '$pcode')";
        echo '<script>alert("Promotion has been added!")</script>';
    }

    if (!mysqli_query($conn, $query)){
        echo "Error: '.mysqli_error($conn)";
    }

}

