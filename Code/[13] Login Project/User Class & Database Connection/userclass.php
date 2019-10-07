<?php

require_once( "dbclass.php" );

class User
{   
    private $db;
    
    public function __construct( )
    {
        $this->db = new Database( "localhost", "root", "", "LoginProject" );
    }
}

?>