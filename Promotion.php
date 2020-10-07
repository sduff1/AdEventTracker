<?php
class Promotion {
    public $name; //Promotion Name
    public $desc; //Promotion Description
    public $amountoff; //amount off of price(percentage)
    public $type; //Promotion Type
    public $code; //Promotion Unique code

    function Create($name, $desc, $amountoff, $type, $code) {
        $this->name = $name;
        $this->amountoff = $amountoff;
        $this->desc = $desc;
        $this->type = $type;
        $this->code = $code;
    }
    function set_name($name) {
        $this->name = $name;
    }
    function set_desc($desc) {
        $this->desc = $desc;
    }
    function set_amountoff($amountoff) {
        $this->amountoff = $amountoff;
    }
    function set_type($type) {
        $this->type = $type;
    }
    function set_code($code) {
        $this->code = $code;
    }
    function get_name() {
        return $this->name;
    }
    function get_desc() {
        return $this->desc;
    }
    function get_amountoff() {
        return $this->amountoff;
    }
    function get_type() {
        return $this->type;
    }
    function get_code() {
        return $this->code;
    }
}

?>