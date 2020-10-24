<?php
class Item {
    public $itemNumber;
    public $description;
    public $category;
    public $department;
    public $cost;
    public $retailCost;

    public function __construct($itemNumber,$description,$category,$department,$cost,$retailCost)
    {
        $this->itemNumber=$itemNumber;
        $this->description=$description;
        $this->category=$category;
        $this->department=$department;
        $this->cost=$cost;
        $this->retailCost=$retailCost;
    }

    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    public function setItemNumber($itemNumber): void
    {
        $this->itemNumber = $itemNumber;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department): void
    {
        $this->department = $department;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost): void
    {
        $this->cost = $cost;
    }

    public function getRetailCost()
    {
        return $this->retailCost;
    }

    public function setRetailCost($retailCost): void
    {
        $this->retailCost = $retailCost;
    }




}