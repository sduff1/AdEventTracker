<?php
require 'Item.php';
$Apple = new Item();
$Apple->Create('Apple', 1, 'It is Apple', 'Fruit', 'Produce', 1, 0.20);
echo $Apple->get_num();
