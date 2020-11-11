<?php
class AdEvent {
    public $eventCode;
    public $description;
    public $startDate;
    public $endDate;
    public $type;

    public function __construct($eventCode,$description,$startDate,$endDate,$type)
    {
        $this->eventCode=$eventCode;
        $this->description=$description;
        $this->startDate=$startDate;
        $this->endDate=$endDate;
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

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }





}