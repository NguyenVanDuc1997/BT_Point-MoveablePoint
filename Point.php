<?php


class Point
{
    public $x=0.0;
    public $y=0.0;

    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x,$y){
        $this->setX($x);
        $this->sety($y);
    }

    public function getXY(){
        return [$this->getX(),$this->getY()];
    }

    public function __toString()
    {
     return "(".$this->getX().",".$this->getY().")";
    }

}