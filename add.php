<?php
require 'database.php';



function additem($name, $num, $desc, $cat, $dep, $price, $retcost)
{
    require 'database.php';
    global $conn;


    $query = "INSERT INTO item.items (Name, Number, Description, Category, Department, Price, RetailerCost)
            VALUES ('$name', '$num', '$desc', '$cat', '$dep', '$price', '$retcost')";
    if (!mysqli_query($conn, $query)){
        echo "Error";
    }






}