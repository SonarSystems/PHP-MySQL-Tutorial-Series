<?php

class Car
{
    public static $type = "Car";
    
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
echo Car::$type;

?>