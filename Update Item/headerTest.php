<?php
/**
 * This is the navigation bar that will be required by all Form files
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ad Event Tracker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/de81de044b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/backdrop.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #0a0b0d">
    <a class="navbar-brand" href="../index.php">Ad Event Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Item
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../addItemForm.php"><i class="far fa-plus-square"></i> Add Item</a>
                    <a class="dropdown-item" href="updateItemForm.php"><i class="fas fa-sync"></i> Update Item</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ad Event
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../addAdEventForm.php"><i class="fas fa-file-invoice-dollar"></i> Add Ad Event</a>
                    <a class="dropdown-item" href="../updateAdEventForm.php"><i class="fas fa-sync"></i> Update Ad Event</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Promotion
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../addPromotionForm.php"><i class="fas fa-cart-plus"></i> Add Promotion</a>
                    <a class="dropdown-item" href="../Update%20Promotion/updatePromotionForm.php"><i class="fas fa-sync"></i> Update Promotion</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../searchItemForm.php"><i class="fas fa-search"></i> Search Item</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../searchPromotionForm.php"><i class="fas fa-search"></i> Search Promotion</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="updateItemForm.php"><i class="fas fa-search"></i> Update Item Form Test</a>
            </li>

        </ul>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
