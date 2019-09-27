<?php

abstract class Vehicle
{
    public $speed;
    public $acceleration;
    public $wheels;
    
    abstract function PrintAllInfo( );
    abstract function MoveForward( );
}

class Car extends Vehicle
{
    public function __construct( )
    {
        echo "This is the car starting<br />";
    }
    
    public function PrintAllInfo( )
    {
        
    }
    
    public function MoveForward( )
    {
        
    }
    
    public function OpenDoor( )
    {
        echo "Open Door<br />";
        
        $this->MoveForward( );
    }
}

//$vehicleObj = new Vehicle( );

$carObj = new Car( );
$carObj->OpenDoor( );
//$carObj->MoveForward( );

?>