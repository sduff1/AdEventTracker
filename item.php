<?php

require ('configuration/database.php');

//Check For Submit
if(isset($_POST['submit'])) {
    //Get form data
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $department = mysqli_real_escape_string($conn,$_POST['department']);
    $cost = mysqli_real_escape_string($conn,$_POST['cost']);
    $retail_cost = mysqli_real_escape_string($conn,$_POST['retail_cost']);

    $query = "INSERT INTO item(item_number, item_description, category, department_name,purchase_cost, full_retail_price) VALUES('$number', '$description','$category','$department', '$cost','$retail_cost')";


    if (!mysqli_query($conn, $query)){
        echo "Error: '.mysqli_error($conn)";
    }


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add an Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Ad Event Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="item.php">Add Item <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="update.php">Update Item</a>
            </li>
        </ul>
    </div>
</nav>

<div class ="container">

    <div class="form-group">

        <h1>Add an Item</h1>

        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">

            <label>Item Number</label>
            <input type = "text" name="number" class="form-control">

            <label>Item Description</label>
            <input type = "text" name="description" class="form-control">

            <label>Item Category</label>
            <input type = "text" name="category" class="form-control">

            <label>Item Department Name</label>
            <input type = "text" name="department" class="form-control">

            <label>Item Purchase Cost</label>
            <input type = "text" name="cost" class="form-control">

            <label>Item Full Retail Cost</label>
            <input type = "text" name="retail_cost" class="form-control">

            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>
    </div>
</div>

</body>
</html>
