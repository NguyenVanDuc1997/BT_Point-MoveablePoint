<?php
include_once ("Point.php");
include_once ("MovablePoint.php");

$point=new Point(3.5,4.5);
foreach ($point->getXY() as $value){
    echo $value."-";
}
echo "<br><br>".$point."<br><br>";

$move= new MovablePoint(4.2,6.7,3.1,2.3);
foreach ($move->getSpeed() as $value){
    echo $value."-";
}
echo "<br><br>".$move;
echo "<br><br>".$move->move();
echo $move;

