<?php

class Math
{
    const PI = 3.14159;
    
    public function __construct( )
    {
        echo self::PI;
    }
}

$mathObj = new Math( );

?>