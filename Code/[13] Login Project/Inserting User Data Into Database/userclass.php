<?php

require_once( "dbclass.php" );

class User
{   
    private $db;
    
    public function __construct( )
    {
        $this->db = new Database( "localhost", "root", "", "LoginProject" );
    }
    
    public function Register( $username, $password, $confirmPassword, $email )
    {
        $fields = array
        (
            "username" => array( ":username" => $username ),
            "password" => array( ":password" => $password ),
            "email" => array( ":email" => $email ),
        );
        
        $this->db->Insert( "users", $fields );
    }
}

?>