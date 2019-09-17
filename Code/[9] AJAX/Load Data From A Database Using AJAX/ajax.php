<?php

$serverName = "localhost";
$username = "root";
$password = "";

$getUser = $_GET["username"];

try
{
    $connection = new PDO( "mysql:host=$serverName;dbname=EpicDatabase", $username, $password );
    
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch( PDOException $error )
{
    
}

$query = $connection->prepare( "SELECT * FROM Users WHERE username='$getUser'" );
$query->execute( );

$query->setFetchMode( PDO::FETCH_ASSOC );

foreach( new RecursiveArrayIterator( $query->fetchAll( ) ) as $key => $value )
{
    echo $value["id"]." : ".$value["username"]."<br />";
}

$connection = null;

?>








