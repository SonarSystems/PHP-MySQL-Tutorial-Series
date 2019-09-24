<?php

class Vehicle
{
    public $speed = 10;
    public $acceleration = 3.5;
    public $wheels = 4;
    
    public function PrintAllInfo( )
    {
        echo "Speed is: ".$this->speed."<br />";
        echo "Acceleration is: ".$this->acceleration."<br />";
        echo "Number of wheels are: ".$this->wheels."<br />";
        
        echo "<br />";
    }
}

$obj = new Vehicle;
$obj2 = new Vehicle;

echo "Vehicle 1 stats<br />";
$obj->PrintAllInfo( );

echo "Vehicle 2 stats<br />";
$obj2->PrintAllInfo( );

$obj->acceleration = 120;

echo "Vehicle 1 stats<br />";
$obj->PrintAllInfo( );

echo "Vehicle 2 stats<br />";
$obj2->PrintAllInfo( );


?>