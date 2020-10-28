<?php
//Need the connection to the server and database which is why it requires database.php
require('configuration/database.php');

session_start();


//if submit has been clicked
if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);


    $query = "SELECT * FROM promotion WHERE Name = '$name'";

    $result = mysqli_query($conn,$query);

    $post = mysqli_fetch_assoc($result);

    if ($post > 0) {
        $name = $post['Name'];
        $desc = $post['Description'];
        $aOff = $post['AmountOff'];
        $type = $post['Type'];
        $code = $post['Code'];

        $_SESSION['Name'] = $name;
        $_SESSION['Description'] = $desc;
        $_SESSION['AmountOff'] = $aOff;
        $_SESSION['Type'] = $type;
        $_SESSION['Code'] = $code;
    }
    else{
        echo "that Promotion does not exist";
    }

    require('searchPromotionTable.php');



}

