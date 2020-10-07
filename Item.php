<?php
class Item {
    public $name; //Item name
    public $num; //Item number
    public $desc; //Item Description
    public $cat; //Item Category
    public $dep; //Item Department
    public $price; //Item Price
    public $retcost; //Incurred Retailer Cost

    function Create($name, $num, $desc, $cat, $dep, $price, $retcost) {
        $this->name = $name;
        $this->num = $num;
        $this->desc = $desc;
        $this->cat = $cat;
        $this->dep = $dep;
        $this->price = $price;
        $this->retcost = $retcost;
    }
    function set_name($name) {
    $this->name = $name;
}
    function set_num($num) {
        $this->num = $num;
    }
    function set_desc($desc) {
        $this->desc = $desc;
    }
    function set_cat($cat) {
        $this->cat = $cat;
    }
    function set_dep($dep) {
        $this->dep = $dep;
    }
    function set_price($price) {
        $this->price = $price;
    }
    function set_retcost($retcost) {
        $this->retcost = $retcost;
    }
    function get_name() {
        return $this->name;
    }
    function get_num() {
        return $this->num;
    }
    function get_desc() {
        return $this->desc;
    }
    function get_cat() {
        return $this->cat;
    }
    function get_dep() {
        return $this->dep;
    }
    function get_price() {
        return $this->price;
    }
    function get_retcost() {
        return $this->retcost;
    }
}

?>
