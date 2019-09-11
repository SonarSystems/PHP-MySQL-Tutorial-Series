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



$uname = "<b>Darth Vader</b>";
$uname = htmlentities( $uname );

$params = array
(
    ":u" => $uname,
    ":t" => "Sith Lord"
);

$query = $connection->prepare( "
INSERT INTO Users (username, type) 
VALUES (:u, :t)
" );

/*$params = array
(
    $uname,
    "Sith Lord"
);

$query = $connection->prepare( "
INSERT INTO Users (username, type) 
VALUES (?, ?)
" );*/

$query->execute( $params );

$query = $connection->prepare( "SELECT id, username FROM Users" );
$query->execute( );


$result = $query->setFetchMode( PDO::FETCH_ASSOC );

foreach( new RecursiveArrayIterator( $query->fetchAll( ) ) as $key => $value )
{
    echo $value["id"]." : ".$value["username"]."<br />";
}

$connection = null;

?>








