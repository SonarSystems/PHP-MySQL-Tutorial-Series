<?php

$serverName = "localhost";
$username = "root";
$password = "";

try
{
    $connection = new PDO( "mysql:host=$serverName;dbname=EpicDatabase", $username, $password );
    
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    echo "Connected successfully<br />";
}
catch( PDOException $error )
{
    echo "Connection failed: ".$error->getMessage( )."<br />";
}

/*$query = $connection->prepare( "SELECT id, username FROM Users" );
$query->execute( );

$result = $query->setFetchMode( PDO::FETCH_ASSOC );

foreach( new RecursiveArrayIterator( $query->fetchAll( ) ) as $key => $value )
{
    echo $value["id"]." : ".$value["username"]."<br />";
}*/

//$query = $connection->prepare(  );
//$query->execute( );

$connection->beginTransaction( );

$connection->exec( "INSERT INTO Users (username, type) VALUES ('Darth Vader', 'Sith Lord')" );
$connection->exec( "INSERT INTO Users (username, type) VALUES ('Darth Plagueis', 'Sith Master')" );
$connection->exec( "INSERT INTO Users (username, type) VALUES ('Darth Sidious', 'Sith Master')" );

$connection->commit( );


$connection = null;

?>








