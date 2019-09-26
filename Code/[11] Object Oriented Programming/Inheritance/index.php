<?php

class Vehicle
{
    public $speed;
    public $acceleration;
    public $wheels;
    
    public function __construct( )
    {
        $this->speed = 10;
        $this->acceleration = 3.5;
        $this->wheels = 4;
        echo "<div style='color:red;'>I have begun</div><br />";
    }
    
    public function __destruct( )
    {
        echo "I am dead<br />";
    }
    
    public function PrintAllInfo( )
    {
        echo "Speed is: ".$this->speed."<br />";
        echo "Acceleration is: ".$this->acceleration."<br />";
        echo "Number of wheels are: ".$this->wheels."<br />";
        
        echo "<br />";
    }
    
    public function MoveForward( )
    {
        echo "Move forward<br />";
    }
}

class Car extends Vehicle
{
    public function __construct( )
    {
        echo "This is the car starting<br />";
    }
    
    public function OpenDoor( )
    {
        echo "Open Door<br />";
    }
}

$carObj = new Car( );

$carObj->PrintAllInfo( );
$carObj->MoveForward( );
$carObj->OpenDoor( );


?>