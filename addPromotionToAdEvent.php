<?php
    require ('item.php');
    require ('Promotion.php');
    require ('AdEvent.php');
    require ('AdEventPromotion.php');


    function addPromotionToAdEvent($promocode, $event, $notes){


        $i = 1;
        while ((mysqli_query($conn, "SELECT EXISTS(SELECT * from produce.adeventpromotion WHERE ID=$i);")) == 1){
            $i++;
        }
        $id = $i;

        $product = new AdEventPromotion($id, $promocode, $event, $notes);

        $Id = $product->getID();
        $promoCode = $product->getPromocode();
        $eventCode = $product->getEventCode();
        $Notes = $product->getNotes();

        $query = "INSERT INTO produce.adeventpromotion(ID, promocode, eventcode, notes) VALUES('$Id', '$promoCode','$eventCode','$Notes')";
        echo '<script>alert("Item has been added!")</script>';
        if (!mysqli_query($conn, $query)){
            echo "Error: '.mysqli_error($conn)";
        }









    }

