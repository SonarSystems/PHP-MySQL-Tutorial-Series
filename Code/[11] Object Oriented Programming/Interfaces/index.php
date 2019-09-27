<?php

interface Vehicle
{
    public function MoveForward( );
    public function MoveBackground( );
}

class Car implements Vehicle
{
    public function MoveForward( )
    {
        echo "I am moving forward yay<br />";
    }
    
    public function MoveBackground( )
    {
        echo "I am moving backward yay<br />";
    }
}

class Bike implements Vehicle
{
    
}

$carObj = new Car( );

$carObj->MoveForward( );

?>