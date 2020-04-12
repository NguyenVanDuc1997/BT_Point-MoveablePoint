<?php

include_once ('Point.php');
class MovablePoint extends Point
{
    public $xSpeed=0.0;
    public $ySpeed=0.0;

    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }


    public function setSpeed($xSpeed,$ySpeed){
        $this->setXSpeed($xSpeed);
        $this->setYSpeed($ySpeed);
    }

    public function getSpeed(){
        return [$this->getXSpeed(),$this->getYSpeed()];
    }

    public function __toString()
    {
        return parent::__toString()."speed=(".$this->getXSpeed().",".$this->getYSpeed().")";
    }

    public function move(){
        $this->setX($this->getX()+$this->getXSpeed());
        $this->setY($this->getY()+$this->getYSpeed());
    }
}