<?php
//Need the connection to the server and database which is why it requires database.php
require('../configuration/database.php');

//Needs the item.php to create Item object
require('../item.php');

//if submit has been clicked
if(isset($_POST['submit'])) {
    //Get form data using $_POST
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $cost = mysqli_real_escape_string($conn, $_POST['cost']);
    $retail_cost = mysqli_real_escape_string($conn, $_POST['retail_cost']);

    //Create Item object from data collected
    $product = new Item("$number", "$description", "$category", "$department", "$cost", "$retail_cost");

    //Getter methods to retrieve properties of the Object created
    $item_num = $product->getItemNumber();
    $item_desc= $product->getDescription();
    $item_cat = $product->getCategory();
    $item_dept= $product->getDepartment();
    $item_cost = $product->getCost();
    $item_rtl_cost= $product->getRetailCost();

    //Updates row in the item table where the item_number in table matches the Item Number provided by the user
    $query = "UPDATE item SET item_description='$item_desc',category = '$item_cat', department_name = '$item_dept', purchase_cost = '$item_cost', full_retail_price='$item_rtl_cost' WHERE item_number = {$item_num}";

    //Alerts user that the item has been updated
    echo'<script>alert("Item has been updated")</script>';

    if (!mysqli_query($conn, $query)){
        echo "Error: '.mysqli_error($conn)";
    }

    require('updateItemForm.php');

}

?>
