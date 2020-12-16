<?php
//Need the connection to the server and database which is why it requires database.php
require('../configuration/database.php');

//Needs the Promotion.php to create Promotion object
require('../Promotion.php');
require('../item.php');
require('../ItemtoPromotion.php');

//if submit has been clicked
if (isset($_POST['submit'])) {
    //Get form data using $_POST
    $promoCode = mysqli_real_escape_string($conn, $_POST['promoCode']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $amountOff = mysqli_real_escape_string($conn, $_POST['amountOff']);
    $promoType = mysqli_real_escape_string($conn, $_POST['promoType']);

    //Create Promotion object from data collected
    $product = new Promotion("$name", "$description", "$amountOff", "$promoType", "$promoCode");

    //Getter methods to retrieve properties of the Object created
    $pname = $product->getName();
    $pdesc= $product->getDescription();
    $paOff = $product->getAmountOff();
    $ptype= $product->getType();
    $pcode = $product->getCode();

    //Updates row in the Promotion table where the code in table matches the promo code provided by the user
    $query = "UPDATE promotion SET Name = '$pname',Description = '$pdesc', AmountOff = '$paOff', PromoType = '$ptype'  WHERE PromoCode = {$pcode}";

    echo '<script>alert("Promotion has been updated")</script>';

    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($conn)";
    }

    $result = mysqli_query($conn, "SELECT * FROM promotionitem");
    $rows = mysqli_num_rows($result);

    for($counter = 1; $counter <= $rows; $counter++) {

        $query = "SELECT * FROM promotionitem WHERE ID = {$counter}";
        $result = mysqli_query($conn, $query);
        $post = mysqli_fetch_assoc($result);

        $itp_ID = $post['ID'];
        $itp_PromoCode = $post['PromoCode'];
        $itp_ItemNumber = $post['ItemNumber'];

        $ItemtoPromotion = new ItemtoPromotion("$itp_ID", "$itp_PromoCode", "$itp_ItemNumber");

        $itempromotion_id = $ItemtoPromotion->getID();
        $itempromotion_promoCode = $ItemtoPromotion->getPromoCode();
        $itempromotion_itemNumber = $ItemtoPromotion->getItemNumber();

        if($pcode == $itp_PromoCode) {
            //Item Variables
            $query = "SELECT * FROM item WHERE item_number = {$itempromotion_itemNumber}";
            $result = mysqli_query($conn, $query);
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
            $item_desc = $item->getDescription();
            $item_cat = $item->getCategory();
            $item_dept = $item->getDepartment();
            $item_cost = $item->getCost();
            $item_rtl_cost = $item->getRetailCost();

            if ($ptype == "Percent") {
                $item_cost = $item_rtl_cost - ($item_rtl_cost * ($paOff / 100));
            } else {
                $item_cost = $item_rtl_cost - $paOff;
            }

            $query = "UPDATE item SET item_description='$item_desc',category = '$item_cat', department_name = '$item_dept', purchase_cost = '$item_cost', full_retail_price='$item_rtl_cost' WHERE item_number = {$item_num}";

            if (!mysqli_query($conn, $query)) {
                echo "Error: '.mysqli_error($conn)";
            }
        }
    }

    //Alerts user that the Promotion has been updated
    echo '<script>alert("Item(s) associated has been updated.")</script>';

    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($conn)";
    }

    require('updatePromotionForm.php');

}
?>