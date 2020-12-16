<?php

//Need the connection to the server and database which is why it requires database.php
require('configuration/database.php');

//Needs the AdEvent.php to create AdEvent object
require('AdEvent.php');

/**
 * Method to get data in HTML form (addAdEventForm.php) is post
 * Fetches form data from addAdEventForm.php using $_POST
 *
 * Makes sure there are no duplicate Event Codes being queried into the database
 */

//if submit has been clicked
if (isset($_POST['submit'])) {

//    if(isset($_POST['type_D'])){
//        $type = mysqli_real_escape_string($conn, $_POST['type_D']);
//    }else{
//        $type = mysqli_real_escape_string($conn, $_POST['type']);
//    }

    $radioVal = $_POST['type'];
    if($radioVal == "Percentage"){
        $type = mysqli_real_escape_string($conn, $_POST['type']);
    }else if ($radioVal == "Dollar"){
        $type = mysqli_real_escape_string($conn, $_POST['type']);
    }


    //Get form data using $_POST
    $eventCode = mysqli_real_escape_string($conn, $_POST['event_code']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $startDate = mysqli_real_escape_string($conn, $_POST['start_date']);
    $endDate = mysqli_real_escape_string($conn, $_POST['end_date']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);


    //Create Ad Event object from data collected
    $AdEvent = new AdEvent("$eventCode", "$name", "$startDate", "$endDate", "$description", "$type");


    //Getter methods to retrieve properties of the Object created
    $AdEvent_eventCode = $AdEvent->getEventCode();
    $AdEvent_name = $AdEvent->getName();
    $AdEvent_startDate = $AdEvent->getStartDate();
    $AdEvent_endDate = $AdEvent->getEndDate();
    $AdEvent_description = $AdEvent->getDescription();
    $AdEvent_type = $AdEvent->getType();


    //Get the elements from AdEvent_eventCode column from adevent table, that matches the number provided by the user in the Event Code field of addAdEvent.php
    $check = mysqli_query($conn, "SELECT * from ad_event WHERE event_code='$AdEvent_eventCode'");

    //Checks how many rows are in $check
    $checkRows = mysqli_num_rows($check);

    //if the number of rows is > 0 that means that there is at least an element in AdEvent_eventCode column in the database that matches the number provided by user (THERE IS A DUPLICATE)
    //Will not allow query to be processed
    if ($checkRows > 0) {
        echo '<script>alert("Could not add Event! Event is already in system.")</script>';
    } else {
        //If there is no row, then it will process the query
        $query = "INSERT INTO ad_event(event_code, name, start_date, end_date, description, type) VALUES('$AdEvent_eventCode', '$AdEvent_name','$AdEvent_startDate','$AdEvent_endDate', '$AdEvent_description','$AdEvent_type')";
        echo '<script>alert("Ad Event has been added!")</script>';
        if (!mysqli_query($conn, $query)) {
            echo "Error: '.mysqli_error($query)";
        }
    }

}


