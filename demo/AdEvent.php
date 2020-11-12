<?php
class AdEvent {

    public $eventCode;
    public $name;
    public $description;
    public $startDate;
    public $endDate;

    public function __construct($eventCode,$name,$description,$startDate,$endDate)
    {
        $this->eventCode=$eventCode;
        $this->name=$name;
        $this->description=$description;
        $this->startDate=$startDate;
        $this->endDate=$endDate;
    }

    public function getEventCode()
    {
        return $this->eventCode;
    }

    public function setEventCode($eventCode): void
    {
        $this->eventCode = $eventCode;
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

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setCategory($startDate): void
    {
        $this->category = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }






}