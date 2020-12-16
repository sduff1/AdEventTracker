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
    <div class= "container">
<!--         <div class = "row justify-content-start">-->
<!--             <div class = "col-sm">-->
                <div class = "form-group">
                    <h1>Item Details </h1>
                    <form method="POST" action="updateItem.php" name ="myForm">

                    <label>Item Number</label>
                    <input class ="form-control form-control-sm col-md-4" value ="<?php echo $num?>" name="number" class="form-control">
                    <p></p>

                    <label>Item Description</label>
                    <input class ="form-control form-control-sm col-md-4" type = "text" value = "<?php  echo ($desc)?>" name="description" class="form-control">
                    <p></p>

                    <label>Item Category</label>
                    <input class ="form-control form-control-sm col-md-4" value ="<?php echo $cat?>" name="category" class="form-control">
                    <p></p>

                    <label>Item Department Name</label>
                    <input class ="form-control form-control-sm col-md-4" value = "<?php echo $dept?>" name="department" class="form-control">
                    <p></p>

                    <label>Item Purchase Cost</label>
                    <input class ="form-control form-control-sm col-md-4" value = "<?php echo $cost?>" name="cost" class="form-control">
                    <p></p>

                    <label>Item Full Retail Cost</label>
                    <input class ="form-control form-control-sm col-md-4" value = "<?php echo $retailCost?>" name="retail_cost" class="form-control">
                    <p></p>

                    <p></p>

                    <input type="submit" name="submit" value="Submit" class="btn btn-danger">
                    </form>
                </div>
<!--             </div>-->
         </div>
    </div>
</body>
</html>
