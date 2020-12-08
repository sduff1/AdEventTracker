<?php
require('configuration/database.php');

//Start session in order to send variable data to table.php in order to create table for item
//session_start();

if(isset($_POST['submit'])){

    //Get item number entered by user
    $number = mysqli_real_escape_string($conn, $_POST['number-search']);
    ///echo $number;

    //Create query
    $query = "SELECT * FROM item WHERE item_number = {$number}";

    //Get result
    $result = mysqli_query($conn,$query);

    //Fetch data
    $post = mysqli_fetch_assoc($result);

    //Get specific data from database
    $number = $post['item_number'];
    $desc = $post['item_description'];
    $cat = $post['category'];
    $dept = $post['department_name'];
    $purchaseCost= $post['purchase_cost'];
    $retailCost= $post['full_retail_price'];

    //Create session variable to be used in searchItemTable.php
    $_SESSION['item_number'] = $number;
    $_SESSION['item_description'] = $desc;
    $_SESSION['category'] = $cat;
    $_SESSION['department_name'] = $dept;
    $_SESSION['purchase_cost'] = $purchaseCost;
    $_SESSION['full_retail_cost'] = $retailCost;


    require('searchItemTable.php');

}
?>



