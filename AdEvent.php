<?php
class AdEvent {
    public $eventCode;
    public $name;
    public $startDate;
    public $endDate;
    public $description;
    public $type;

    public function __construct($eventCode,$name,$startDate,$endDate,$description,$type)
    {
        $this->eventCode=$eventCode;
        $this->name=$name;
        $this->startDate=$startDate;
        $this->endDate=$endDate;
        $this->description=$description;
        $this->type=$type;
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

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate()
    {
        $this->startDate;
    }


    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }





}