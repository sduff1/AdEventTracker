<?php
require('configuration/database.php');
require('item.php');
require('Promotion.php');

//Start session in order to send variable data to table.php in order to create table for item
//session_start();

if(isset($_POST['submit'])){

    //Get item number entered by user
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $description = mysqli_real_escape_string($conn, $_POST['item_description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    //Create query
    $query = "SELECT * FROM item WHERE item_number = {$number}";

    if($number == null) {

        $query = "SELECT * FROM item WHERE item_description = '$description'";

        if($description == null){

            $query = "SELECT * FROM item WHERE category = '$category'";

            if($category == null){

                $query = "SELECT * FROM item WHERE department_name = '$department'";

            }
        }
    }

    //Get result
    $result = mysqli_query($conn,$query);

    //Fetch data
    $post = mysqli_fetch_assoc($result);

    //Get specific data from database
    if ($post > 0) {
    $number = $post['item_number'];
    $desc = $post['item_description'];
    $cat = $post['category'];
    $dept = $post['department_name'];
    $purchaseCost = $post['purchase_cost'];
    $retailCost = $post['full_retail_price'];

    //Create session variable to be used in searchItemTable.php
    $_SESSION['item_number'] = $number;
    $_SESSION['item_description'] = $desc;
    $_SESSION['category'] = $cat;
    $_SESSION['department_name'] = $dept;
    $_SESSION['purchase_cost'] = $purchaseCost;
    $_SESSION['full_retail_cost'] = $retailCost;
    }else{
        echo "That item does not exist.";
    }


    require('searchItemTable.php');

}

if(isset($_POST['submit2'])) {

    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "SELECT * FROM promotion WHERE PromoCode = '$code'";

    if($code == null) {
        $query = "SELECT * FROM promotion WHERE Name = '$name'";

        if($name == null){
            $query = "SELECT * FROM promotion WHERE Description = '$description'";
        }
    }

    $result = mysqli_query($conn,$query);

    $post = mysqli_fetch_assoc($result);

    if ($post > 0) {
        $name = $post['Name'];
        $desc = $post['Description'];
        $aOff = $post['AmountOff'];
        $type = $post['PromoType'];
        $code = $post['PromoCode'];

        $_SESSION['Name'] = $name;
        $_SESSION['Description'] = $desc;
        $_SESSION['AmountOff'] = $aOff;
        $_SESSION['PromoType'] = $type;
        $_SESSION['PromoCode'] = $code;
    }
    else{
        echo "That Promotion does not exist.";
    }

    require('searchPromotionTable.php');
}

if(isset($_POST['submit3'])) {

    //Get item number entered by user
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $description = mysqli_real_escape_string($conn, $_POST['item_description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    //Create query
    $query = "SELECT * FROM item WHERE item_number = {$number}";

    if($number == null) {

        $query = "SELECT * FROM item WHERE item_description = '$description'";

        if($description == null){

            $query = "SELECT * FROM item WHERE category = '$category'";

            if($category == null){

                $query = "SELECT * FROM item WHERE department_name = '$department'";

            }
        }
    }

    //Get result
    $result = mysqli_query($conn,$query);

    //Fetch data
    $post = mysqli_fetch_assoc($result);

    if ($post > 0) {

        $number = $post['item_number'];
        $desc = $post['item_description'];
        $cat = $post['category'];
        $dept = $post['department_name'];
        $purchaseCost = $post['purchase_cost'];
        $retailCost = $post['full_retail_price'];

        $Item = new Item("$number", "$desc", "$cat", "$dept", "$purchaseCost", "$retailCost");

        $Item_Number = $Item -> getItemNumber();
        $Item_description = $Item -> getDescription();
        $Item_category = $Item -> getCategory();
        $Item_department = $Item -> getDepartment();
        $Item_purchaseCost = $Item -> getCost();
        $Item_retailCost = $Item -> getRetailCost();
    }
    else{
        echo "That Item does not exist.";
    }

    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "SELECT * FROM promotion WHERE PromoCode = '$code'";

    if($code == null) {
        $query = "SELECT * FROM promotion WHERE Name = '$name'";

        if($name == null){
            $query = "SELECT * FROM promotion WHERE Description = '$description'";
        }
    }

    $result = mysqli_query($conn,$query);

    $post = mysqli_fetch_assoc($result);

    if ($post > 0) {
        $pname = $post['Name'];
        $pdesc = $post['Description'];
        $aOff = $post['AmountOff'];
        $type = $post['PromoType'];
        $pcode = $post['PromoCode'];

        $Promotion = new Promotion("$pname", "$pdesc", "$aOff", "$type", "$pcode");

        $Promotion_name = $Promotion -> getName();
        $Promotion_description = $Promotion -> getDescription();
        $Promotion_amountOff = $Promotion -> getAmountOff();
        $Promotion_type = $Promotion -> getType();
        $Promotion_code = $Promotion -> getCode();

    }
    else{
        echo "That Promotion does not exist.";
    }

    $result = mysqli_query($conn, "SELECT * FROM promotionitem");
    $rows = mysqli_num_rows($result);
    $ID = $rows + 1;

    $query = "INSERT INTO produce.promotionitem(ID, PromoCode, ItemNumber) VALUES('$ID', '$Promotion_code','$Item_Number')";

    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($conn)";
    }else{
        echo '<script>alert("Item has been added to the Promotion!")</script>';
    }

    if ($Promotion_type == "Percent") {
        $item_purchaseCost = $Item_retailCost - ($Item_retailCost * ($Promotion_amountOff / 100));
    } else {
        $item_purchaseCost = $Item_retailCost - $Promotion_amountOff;
    }

    $query = "UPDATE item SET item_description='$Item_description',category = '$Item_category', department_name = '$Item_department', purchase_cost = '$Item_purchaseCost', full_retail_price='$Item_retailCost' WHERE item_number = {$Item_Number}";

    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($conn)";
    }



}

?>



