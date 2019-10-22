<?php

class Database
{
    private $connection;
    private $serverName;
    private $username;
    private $password;
    private $dbName;
    private $selectCount;
    
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
    
    public function Select( $table, $where = NULL )
    {
        $query = NULL;
        
        if ( $where === NULL )
        {    
            $query = $this->connection->prepare( "
                SELECT * FROM $table
            " );
        }
        else
        {
            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];
            
            $query = $this->connection->prepare( "
                SELECT * FROM $table
                WHERE $field $operator '$value'
            " );
        }
        
        $query->execute( );
        
        $result = $query->fetchAll( \PDO::FETCH_OBJ );
        $this->selectCount = $query->rowCount( );
        
        return $result;
    }
  
  public function Update( $table, $set, $where )
  {
    $query = NULL;

    $whereStr = "";
    $setStr = "";

    $count = 0;

    foreach( $where as $condition )
    { 
      if ( $count > 0 )
      { 
        $whereStr .= " AND ";  
      }  

      $whereStr .= $condition[0]; 
      $whereStr .= $condition[1];  
      $whereStr .= "'$condition[2]'"; 

      $count++;     
    }
    
    $count = 0;

    foreach( $set as $columnValuePair )
    { 
      if ( $count > 0 )
      { 
        $setStr .= " , ";  
      }  

      $setStr .= $columnValuePair[0]; 
      $setStr .= "=";  
      $setStr .= "'$columnValuePair[1]'"; 

      $count++;     
    }

      $query = $this->connection->prepare( "
        UPDATE $table
        SET $setStr
        WHERE $whereStr
      " );  
    
      $query->execute( );
      $this->selectCount = $query->rowCount( );
  }
    
    public function Count( )
    {
        return $this->selectCount;
    }
}

?>







