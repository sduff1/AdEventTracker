<?php
class AdEvent {
    public $code; //Ad Event Unique code
    public $desc; //Ad Event Description
    public $startDate; //Start Date of Ad Event
    public $endDate; //End Date of Ad Event
    public $type; //Ad Event Type


    function Create($code, $desc, $startDate, $endDate, $type) {
        $this->code = $code;
        $this->desc = $desc;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->type = $type;

    }
    function set_code($code) {
        $this->code = $code;
    }
    function set_desc($desc) {
        $this->desc = $desc;
    }
    function set_startDate($startDate) {
        $this->startDate = $startDate;
    }
    function set_endDate($endDate) {
        $this->endDate = $endDate;
    }
    function set_type($type) {
        $this->type = $type;
    }
    function get_code() {
        return $this->code;
    }
    function get_desc() {
        return $this->desc;
    }
    function get_startDate() {
        return $this->startDate;
    }
    function get_endDate() {
        return $this->endDate;
    }
    function get_type() {
        return $this->type;
    }

}
?>