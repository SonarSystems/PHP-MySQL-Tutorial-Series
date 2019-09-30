<?php

class Car
{
    public function __construct( )
    {
        echo "This is the car starting<br />";
    }
    
    final public function OpenDoor( )
    {
        echo "Open Door<br />";
    }
}

class BMW extends Car
{
    public function __construct( )
    {
        echo "Child constructor<br />";
        Car::__construct( );
    }
}


$carObj = new BMW( );

?>