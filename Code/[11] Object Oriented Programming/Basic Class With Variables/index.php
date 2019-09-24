<?php

class Vehicle
{
    public $speed = 10;
}

$obj = new Vehicle;
$obj2 = new Vehicle;

echo "Vehicle 1 speed: ".$obj->speed."<br />";
echo "Vehicle 2 speed: ".$obj2->speed."<br />";

$obj->speed = 89;

echo "Vehicle 1 speed: ".$obj->speed."<br />";
echo "Vehicle 2 speed: ".$obj2->speed."<br />";

?>