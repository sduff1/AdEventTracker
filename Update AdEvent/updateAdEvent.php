<?php

//Need the connection to the server and database which is why it requires database.php
require('../configuration/database.php');

//Needs the AdEvent.php to create AdEvent object
require('../AdEvent.php');

//if submit has been clicked
if (isset($_POST['submit'])) {
    //Get form data using $_POST
    $eventCode = mysqli_real_escape_string($conn, $_POST['event_code']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $startDate = mysqli_real_escape_string($conn, $_POST['start_date']);
    $endDate = mysqli_real_escape_string($conn, $_POST['end_date']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);

    //Create Ad Event object from data collected
    $AdEvent = new AdEvent("$eventCode", "$name", "$startDate", "$endDate", "$description", "$type");

    //Getter methods to retrieve properties of the Object created
    $AdEvent_eventCode = $AdEvent->getEventCode();
    $AdEvent_name = $AdEvent->getName();
    $AdEvent_startDate = $AdEvent->getStartDate();
    $AdEvent_endDate = $AdEvent->getEndDate();
    $AdEvent_description = $AdEvent->getDescription();
    $AdEvent_type = $AdEvent->getType();


    //Updates row in the adevent table where the event_code in table matches the Event Code provided by the user
    $query = "UPDATE ad_event SET name ='$AdEvent_name',start_date = '$AdEvent_startDate', end_date = '$AdEvent_endDate', description = '$AdEvent_description', type='$AdEvent_type' WHERE event_code = '{$AdEvent_eventCode}'";

    //Alerts user that the Event has been updated
    echo '<script>alert("Ad Event has been updated")</script>';

    if (!mysqli_query($conn, $query)) {
        echo "Error: '.mysqli_error($query)";
    }

    require ('updateAdForm.php');

}


