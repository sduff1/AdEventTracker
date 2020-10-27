<?php
class Item {
    public $name;
    public $description;
    public $amountOff;
    public $type;
    public $code;

    public function __construct($name,$description,$amountOff,$department,$cost,$retailCost)
    {
        $this->name=$name;
        $this->description=$description;
        $this->amountOff=$amountOff;
        $this->department=$department;
        $this->cost=$cost;
        $this->retailCost=$retailCost;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getAmountOff()
    {
        return $this->amountOff;
    }

    public function setAmountOff($amountOff): void
    {
        $this->amountOff = $amountOff;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code): void
    {
        $this->code = $code;
    }





}