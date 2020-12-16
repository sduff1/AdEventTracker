<?php
//Need the connection to the server and database which is why it requires database.php
require('configuration/database.php');
require('AdEvent.php');
require('Promotion.php');

//session_start();

//if submit has been clicked
if(isset($_POST['submit'])) {

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

if(isset($_POST['submit2'])) {

    $aecode = mysqli_real_escape_string($conn, $_POST['event_code']);
    $aename = mysqli_real_escape_string($conn, $_POST['event_name']);
    $aedate_range = mysqli_real_escape_string($conn, $_POST['date_range']);
    $aedescription = mysqli_real_escape_string($conn, $_POST['event_description']);

    $query = "SELECT * FROM adevent WHERE event_code = '$aecode'";

    if($aecode == null) {
        $query = "SELECT * FROM adevent WHERE name = '$aename'";

        if($aename == null){
            $query = "SELECT * FROM adevent WHERE description = '$aedescription'";
        }
    }

    $result = mysqli_query($conn,$query);

    $post = mysqli_fetch_assoc($result);

    if ($post > 0) {
        $event_code = $post['event_code'];
        $event_name = $post['name'];
        $event_start = $post['start_date'];
        $event_end = $post['end_date'];
        $event_description = $post['description'];
        $event_type = $post['type'];

        $_SESSION['event_code'] = $event_code;
        $_SESSION['name'] = $event_name;
        $_SESSION['start_date'] = $event_start;
        $_SESSION['end_date'] = $event_end;
        $_SESSION['description'] = $event_description;
        $_SESSION['type'] = $event_type;
    }
    else{
        echo "That Ad Event does not exist.";
    }

    require('searchAdEventTable.php');

}

if(isset($_POST['submit3'])) {

    $aecode = mysqli_real_escape_string($conn, $_POST['event_code']);
    $aename = mysqli_real_escape_string($conn, $_POST['event_name']);
    $aedate_range = mysqli_real_escape_string($conn, $_POST['date_range']);
    $aedescription = mysqli_real_escape_string($conn, $_POST['event_description']);

    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);

    $query = "SELECT * FROM adevent WHERE event_code = '$aecode'";

    if($aecode == null) {
        $query = "SELECT * FROM adevent WHERE name = '$aename'";

        if($aename == null){
            $query = "SELECT * FROM adevent WHERE description = '$aedescription'";
        }
    }

    $result = mysqli_query($conn,$query);

    $post = mysqli_fetch_assoc($result);

    if ($post > 0) {
        $event_code = $post['event_code'];
        $event_name = $post['name'];
        $event_start = $post['start_date'];
        $event_end = $post['end_date'];
        $event_description = $post['description'];
        $event_type = $post['type'];

        $AdEvent = new AdEvent("$event_code", "$event_name", "$event_start", "$event_end", "$event_description", "$event_type");

        $AdEvent_eventCode = $AdEvent->getEventCode();
        $AdEvent_name = $AdEvent->getName();
        $AdEvent_startDate = $AdEvent->getStartDate();
        $AdEvent_endDate = $AdEvent->getEndDate();
        $AdEvent_description = $AdEvent->getDescription();
        $AdEvent_type = $AdEvent->getType();
    }
    else{
        echo "That Ad Event does not exist.";
    }

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

        $product = new Promotion("$name", "$desc", "$aOff", "$type", "$code");

        $pname = $product->getName();
        $pdesc= $product->getDescription();
        $paOff = $product->getAmountOff();
        $ptype= $product->getType();
        $pcode = $product->getCode();
    }
    else{
        echo "That Promotion does not exist.";
    }

    $result = mysqli_query($conn, "SELECT * FROM adeventpromotion");
    $rows = mysqli_num_rows($result);
    $ID = $rows + 1;

    $query = "INSERT INTO produce.adeventpromotion(ID, EventCode, PromoCode, Notes) VALUES('$ID', '$AdEvent_eventCode','$pcode','$notes')";

    echo '<script>alert("Promotion has been added to Ad Event!")</script>';

    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($conn)";
    }

}