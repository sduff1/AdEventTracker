<?php
class AdEventPromotion
{
    public $id;
    public $promocode;
    public $eventcode;
    public $notes;

    public function __construct($id, $promocode, $eventcode, $notes)
    {
        $this->id=$id;
        $this->promocode=$promocode;
        $this->eventcode=$eventcode;
        $this->notes=$notes;

    }
    public function getID()
    {
        return $this->id;
    }

    public function setID($id): void
    {
        $this->id = $id;
    }

    public function getPromocode()
    {
        return $this->promocode;
    }

    public function setPromocode($promocode): void
    {
        $this->promocode = $promocode;
    }

    public function getEventCode()
    {
        return $this->eventcode;
    }

    public function setEventCode($eventcode): void
    {
        $this->eventcode = $eventcode;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes): void
    {
        $this->notes = $notes;
    }




}