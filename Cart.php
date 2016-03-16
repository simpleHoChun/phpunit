<?php
class Car
{
    /**
     * @var int
     */
    protected $doors;

    /**
     * Class constructor
     *
     * @return void
     */
    public function __construct($doors = 2)
    {
        $this->setDoors($doors);
    }

    /**
     * Setter for the doors
     *
     * @param int $doors
     * @return void
     */
    /*public function setDoors($doors)
    {
        $this->doors = $doors;
    }*/
}
