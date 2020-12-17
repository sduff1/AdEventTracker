<?php
//Need the connection to the server and database which is why it requires database.php
require('configuration/database.php');
require('AdEvent.php');     /*Might not need*/
require('Promotion.php');

//session_start();

//if submit has been clicked
if(isset($_POST['submit'])) {

    $amountOff = mysqli_real_escape_string($conn, $_POST['amountoff']);
    $promoType = mysqli_real_escape_string($conn, $_POST['promotype']);
    /*$description = mysqli_real_escape_string($conn, $_POST['description']);*/

        $query = "SELECT * FROM promotion WHERE PromoCode = '$amountOff'";

    /*if($code == null) {*/
        $query = "SELECT * FROM promotion WHERE Name = '$promoType'";

       /* if($name == null){
            $query = "SELECT * FROM promotion WHERE Description = '$description'";
        }*/
    /*If stmnt}*/

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
        echo "No matching Promotions were found.";
    }

    require('searchPromotionTable.php');
}


