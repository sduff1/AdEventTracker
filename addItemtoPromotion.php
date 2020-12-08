<?php

require ('configuration/database.php');
require('item.php');
require('Promotion.php');
require('ItemtoPromotion.php');


if(isset($_POST['submit'])) {

    $id = mysqli_real_escape_string($conn, $_POST['ID']);
    $result = mysqli_real_escape_string($conn, $_POST['promoCode']);
    $itemNumber= mysqli_real_escape_string($conn, $_POST['itemNumber']);

    if ($result == 0) {
        $promoCode = mysqli_real_escape_string($conn, $_POST['promocode']);
    } else
        $promoCode = $result;

    $product = new ItemtoPromotion($id, $promoCode, $itemNumber);

    $ITP_id = $product->getID();
    $ITP_promoCode = $product->getPromoCode();
    $ITP_itemNumber = $product->getItemNumber();

    $query = "INSERT INTO produce.promotionitem(ID, PromoCode, ItemNumber) VALUES('$ITP_id', '$ITP_promoCode','$ITP_itemNumber')";
    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($conn)";
    }
    //End adding to promotion item

    //Item Variables
    $query = "SELECT * FROM item WHERE item_number = {$itemNumber}";
    $result = mysqli_query($conn,$query);
    $post = mysqli_fetch_assoc($result);

    $item_number = $post['item_number'];
    $item_description = $post['item_description'];
    $item_category = $post['category'];
    $item_department = $post['department_name'];
    $item_purchase = $post['purchase_cost'];
    $item_full = $post['full_retail_price'];

    $item = new Item("$item_number", "$item_description", "$item_category", "$item_department", "$item_purchase", "$item_full");

    //Getter methods to retrieve properties of the Object created
    $item_num = $item->getItemNumber();
    $item_desc= $item->getDescription();
    $item_cat = $item->getCategory();
    $item_dept= $item->getDepartment();
    $item_cost = $item->getCost();
    $item_rtl_cost= $item->getRetailCost();

    //Promotion Variables
    $query = "SELECT * FROM promotion WHERE PromoCode = {$promoCode}";
    $result = mysqli_query($conn,$query);
    $post = mysqli_fetch_assoc($result);

    $promotion_name = $post['Name'];
    $promotion_description = $post['Description'];
    $promotion_amountOff = $post['AmountOff'];
    $promotion_promoType = $post['PromoType'];
    $promotion_promoCode = $post['PromoCode'];

    $promotion = new promotion("$promotion_name", "$promotion_description", "$promotion_amountOff", "$promotion_promoType", "$promotion_promoCode");

    //Getter methods to retrieve properties of the Object created
    $promo_name = $promotion->getName();
    $promo_desc= $promotion->getDescription();
    $promo_amountOff = $promotion->getAmountOff();
    $promo_promoType = $promotion->getType();
    $promo_promoCode = $promotion->getCode();

    //Calculate New Purchase Cost
    if($promo_promoType == "Percent"){
        $item_cost = $item_cost - ($item_cost * ($promo_amountOff/100));
    }else{
        $item_cost = $item_cost - $promo_amountOff;
    }

    //Updates row in the item table where the item_number in table matches the Item Number provided by the user
    $query = "UPDATE item SET item_description='$item_desc',category = '$item_cat', department_name = '$item_dept', purchase_cost = '$item_cost', full_retail_price='$item_rtl_cost' WHERE item_number = {$item_num}";

    //Alerts user that the item has been updated
    echo'<script>alert("Item has been updated")</script>';

    if (!mysqli_query($conn, $query)){
        echo "Error: '.mysqli_error($conn)";
    }

}