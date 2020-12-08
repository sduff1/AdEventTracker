<?php
        //Gets data from session created in searchItem.php
        $num = $_SESSION['item_number'];
        $desc = $_SESSION['item_description'];
        $cat =  $_SESSION['category'];
        $dept = $_SESSION['department_name'];
        $cost =  $_SESSION['purchase_cost'];
        $retailCost = $_SESSION['full_retail_cost'];

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
            <h1>Update an Item </h1>
            <form method="POST" action="updateItem.php" name ="myForm">

            <label>Item Number</label>
            <input value ="<?php echo $num?>" name="number" class="form-control">

            <label>Item Description</label>
            <input type = "text" value = "<?php  echo ($desc)?>" name="description" class="form-control">

            <label>Item Category</label>
            <input value ="<?php echo $cat?>" name="category" class="form-control">

            <label>Item Department Name</label>
            <input value = "<?php echo $dept?>" name="department" class="form-control">

            <label>Item Purchase Cost</label>
            <input value = "<?php echo $cost?>" name="cost" class="form-control">

            <label>Item Full Retail Cost</label>
            <input value = "<?php echo $retailCost?>" name="retail_cost" class="form-control">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-danger">
            </form>
        </div>
    </div>
</body>
</html>
