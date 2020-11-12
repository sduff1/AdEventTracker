<?php
require('configuration/database.php');
//Start session in order to send variable data to table.php in order to create table for item
require('Promotion.php');
require('Item.php');
session_start();


if(isset($_POST['submit'])){

    //Get item number entered by user
    $event = mysqli_real_escape_string($conn, $_POST['event_code']);
    ///echo $number;

    //Create query
    $query = "SELECT * FROM adevent WHERE event_code = '$event'";


    //Get result
    $result = mysqli_query($conn,$query);

    //Fetch data
    $post = mysqli_fetch_assoc($result);

    //Get specific data from database
    $code = $post['event_code'];
    $name = $post['name'];
    $start = $post['start_date'];
    $end = $post['end_date'];
    $desc = $post['description'];


    $query1[] = "SELECT PromoCode FROM adeventpromotion WHERE EventCode = '$event'";


    //Create session variable to be used in searchItemTable.php
    $_SESSION['event_code'] = $code;
    $_SESSION['name'] = $name;
    $_SESSION['start_date'] = $start;
    $_SESSION['end_date'] = $end;
    $_SESSION['description'] = $desc;
    $_SESSION['promos'] = $query1;

    function promoitems($promo)
    {

        $query2[] = "SELECT ItemNumber FROM promotionitem WHERE PromoCode = '$promo'";
        return $query2;
    }
    function getItem($inum)
    {
        $query3 = "SELECT * FROM item WHERE item_number = '$inum'";
        $result3 = mysqli_query($conn,$query3);
        $post3 = mysqli_fetch_assoc($result3);
        $itemname = $post3['item_name'];
        $itemdesc = $post3['item_description'];
        $cat = $post3['category'];
        $dept = $post3['department_name'];
        $cost = $post3['Purchase_Cost'];
        $retail = $post3['full_retail_price'];
        return new item($itemname, $itemdesc, $cat, $dept, $cost, $retail);
    }
    function getPromotion($pcode)
    {
        $query2 = "SELECT * FROM promotion WHERE PromoCode = '$pcode'";
        $result2 = mysqli_query($conn,$query2);
        $post2 = mysqli_fetch_assoc($result2);
        $promname = $post2['Name'];
        $promdesc = $post2['Description'];
        $promaoff = $post2['AmountOff'];
        $promtype = $post2['PromoType'];
        $promcode = $post2['PromoCode'];
        return new Promotion($promname, $promdesc, $promaoff, $promtype, $promcode);
    }
    require ('adEventViewerTable.php');


}

?>
