<?php
//Need the connection to the server and database which is why it requires database.php
require('../configuration/database.php');

//Needs the item.php to create Item object


//if submit has been clicked
if (isset($_POST['submit'])) {
    if(isset($_POST['event_code'])) {

        $number = mysqli_real_escape_string($conn, $_POST['event_code']);

        $query = "SELECT * FROM ad_event WHERE event_code = {$number}";

        $result = mysqli_query($conn, $query) or die ("Error: " . mysqli_error($conn));

        while ($row = mysqli_fetch_array($result)) {
            //print_r($row);
            $number = $row['event_code'];
            $name = $row['name'];
            $startDate = $row['start_date'];
            $endDate = $row['end_date'];
            $description = $row['description'];
            $type = $row['type'];


            //Creating session to be used in updateFormWItemValues.php
            //Gets data from session created in searchItem.php

            //Create session variable to be used in searchItemTable.php
            $_SESSION['event_code'] = $number;
            $_SESSION['name'] = $name;
            $_SESSION['start_date'] = $startDate;
            $_SESSION['end_date'] = $endDate;
            $_SESSION['description'] = $description;
            $_SESSION['type'] = $type;


            require('updateFormWAdValues.php');

        }

        if (!mysqli_query($conn, $query)) {
            echo "Error: '.mysqli_error($conn)";
        }
    }

}


