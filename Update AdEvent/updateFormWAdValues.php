<?php
//Gets data from session created in searchItem.php
        $num = $_SESSION['event_code'];
        $name = $_SESSION['name'];
        $startDate = $_SESSION['start_date'];
        $endDate =$_SESSION['end_date'];
        $description = $_SESSION['description'];
        $type = $_SESSION['type'];


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<div>
    <div class="container"
    <div class = "form-group">
        <h1>Update an Ad Event </h1>
        <form method="POST" action="updateAdEvent.php" name ="myForm">

            <label>Event Code</label>
            <input  class ="form-control form-control-sm col-md-4" value ="<?php echo $num?>" name="event_code">
            <p></p>

            <label>Event Name</label>
            <input  class ="form-control form-control-sm col-md-4" type = "text" value = "<?php  echo ($name)?>" name="name">
            <p></p>

            <label>Start Date</label>
            <input  class ="form-control form-control-sm col-md-4" value ="<?php echo $startDate?>" name="start_date">
            <p></p>

            <label>End Date</label>
            <input  class ="form-control form-control-sm col-md-4" value = "<?php echo $endDate?>" name="end_date">
            <p></p>

            <label>Description</label>
            <input  class ="form-control form-control-sm col-md-4" value = "<?php echo $description?>" name="description">
            <p></p>

            <label>Type</label>
            <input  class ="form-control form-control-sm col-md-4" value = "<?php echo $type?>" name="type">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-danger">
        </form>
    </div>
</div>
</body>
</html>
