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
    
}


$carObj = new BMW( );
$carObj->OpenDoor( );

?>