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
        $errors = array( );
        $valid = true;
        
        if ( strlen( $username ) < 6 || strlen( $username ) > 32 )
        {
            $valid = false;
            array_push( $errors, "Username length should be between 6 and 32" );
        }
        
        if ( strlen( $password ) < 6 || strlen( $password ) > 32 )
        {
            $valid = false;
            array_push( $errors, "Password length should be between 6 and 32" );
        }
        else
        {
            if ( $password !== $confirmPassword )
            {
                $valid = false;
                array_push( $errors, "Passwords do not match" );
            }
        }
        
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) )
        {
            $valid = false;
            array_push( $errors, "Invalid email address" );
        }
        else
        {
            if ( strlen( $email ) > 100 )
            {
                $valid = false;
                array_push( $errors, "Email is too long" );
            }
        }
        
        if ( $valid )
        {
            $password = password_hash( $password, PASSWORD_DEFAULT );
            
            $fields = array
            (
                "username" => array( ":username" => $username ),
                "password" => array( ":password" => $password ),
                "email" => array( ":email" => $email ),
            );
            
            $this->db->Insert( "users", $fields );
            
            return true;
        }
        else
        {
            return $errors;
        }
    }
}

?>