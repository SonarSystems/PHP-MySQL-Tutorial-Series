<?php

$serverName = "localhost";
$username = "root";
$password = "";

try
{
    $connection = new PDO( "mysql:host=$serverName", $username, $password );
    
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    $query = $connection->prepare( "DROP DATABASE testDB" );
    $query->execute( );
    
    echo "Connected successfully<br />";
}
catch( PDOException $error )
{
    echo "Connection failed: ".$error->getMessage( )."<br />";
}

?>








