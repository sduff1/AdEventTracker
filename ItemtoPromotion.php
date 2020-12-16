<?php
class ItemtoPromotion
{

    Public $id;
    public $promoCode;
    public $itemNumber;

    public function __construct($id, $promoCode, $itemNumber)
    {
        $this->id=$id;
        $this->promoCode=$promoCode;
        $this->itemNumber=$itemNumber;

    }

    public function getID()
    {
        return $this->id;
    }

    public function setID($id): void
    {
        $this->id = $id;
    }

    public function getPromoCode()
    {
        return $this->promoCode;
    }

    public function setPromoCode($promoCode): void
    {
        $this->promoCode = $promoCode;
    }

    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    public function setItemNumber($itemNumber): void
    {
        $this->itemNumber = $itemNumber;
    }
}
