<?php

class Database
{
    private $connection;
    private $serverName;
    private $username;
    private $password;
    private $dbName;
    
    public function __construct( $serverName, $username, $password, $dbName )
    {
        $this->serverName = $serverName;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        
        try
        {
            $this->connection = new PDO( "mysql:host=$this->serverName;dbname=$this->dbName", $this->username, $this->password );
    
            $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch ( PDOException $error )
        {
            echo "Connection failed: ".$error->getMessage( )."<br />";
        }
    }
    
    public function Close( )
    {
        $this->connection = null;
    }
    
    public function Insert( $table, $fields )
    {
        $index = 0;
        
        $columns = "";
        $valueNames = "";
        $params = array( );
        
        foreach ( $fields as $field )
        {
            $rootKey = array_keys( $fields )[$index];
            
            $columns .= $rootKey;
            
            if ( $index < count( $fields ) - 1 )
            {
                $columns .= ", ";
            }
            
            $key = array_keys( $field )[0];
            $value = $field[$key];
            
            $valueNames .= $key;
            
            if ( $index < count( $fields ) - 1 )
            {
                $valueNames .= ", ";
            }
            
            $params[$key] = $value;
            
            $index++;
        }
        
        $query = $this->connection->prepare( "
            INSERT INTO $table ($columns)
            VALUES ($valueNames)
        " );
        
        $query->execute( $params );
    }
}

?>







