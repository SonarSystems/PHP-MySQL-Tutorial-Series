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
    
    public function PrintAllInfo( )
    {
        echo "Speed is: ".$this->speed."<br />";
        echo "Acceleration is: ".$this->acceleration."<br />";
        echo "Number of wheels are: ".$this->wheels."<br />";
        
        echo "<br />";
    }
}

$obj = new Vehicle( );
$obj2 = new Vehicle( );

$obj->PrintAllInfo( );


?>