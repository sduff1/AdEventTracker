<?php
require('configuration/database.php');
//Start session in order to send variable data to table.php in order to create table for item
require('Promotion.php');
require('Item.php');
//session_start();


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

    $query1 = "SELECT PromoCode FROM adeventpromotion WHERE EventCode = '$event'";
    $result1 = mysqli_query($conn, $query1);
    $promos = [];
    $i=0;
    while($row = mysqli_fetch_assoc($result1))
    {
        $promos[$i] = $row;
        $i++;
    }
    //Create session variable to be used in searchItemTable.php
    $_SESSION['event_code'] = $code;
    $_SESSION['name'] = $name;
    $_SESSION['start_date'] = $start;
    $_SESSION['end_date'] = $end;
    $_SESSION['description'] = $desc;
    $_SESSION['promos'] = $promos;

    function promoitems($pcode)
    {
        $promocode = $pcode;
        require('configuration/database.php');
        $query2 = mysqli_query($conn, "SELECT ItemNumber FROM promotionitem WHERE PromoCode = '$promocode'");
        $i=0;
        $result[] = array();
        while($row = mysqli_fetch_assoc($query2))
        {
            $result[$i]=$row['ItemNumber'];
            $i++;
        }
        return $result;
    }
    function getItem($inum)
    {
        require('configuration/database.php');
        $num = $inum;
        $query3 = "SELECT * FROM item WHERE item_number = '$num'";
        $result3 = mysqli_query($conn,$query3);
        $post3 = mysqli_fetch_assoc($result3);
        $itemnumber = $post3['item_number'];
        $itemdesc = $post3['item_description'];
        $cat = $post3['category'];
        $dept = $post3['department_name'];
        $cost = $post3['purchase_cost'];
        $retail = $post3['full_retail_price'];
        return new item($itemnumber, $itemdesc, $cat, $dept, $cost, $retail);
    }
    function getPromotion($pcode)
    {
        $promocode = $pcode['PromoCode'];
        require('configuration/database.php');
        $result4 = mysqli_query($conn,"SELECT Name, Description, AmountOff, PromoType, PromoCode FROM promotion WHERE PromoCode = '$promocode'");
        $post4 = mysqli_fetch_assoc($result4);
        $promname = $post4['Name'];
        $promdesc = $post4['Description'];
        $promaoff = $post4['AmountOff'];
        $promtype = $post4['PromoType'];
        $promcode = $post4['PromoCode'];
        return new Promotion($promname, $promdesc, $promaoff, $promtype, $promcode);
    }
    require ('adEventViewerTable.php');


}

?>
