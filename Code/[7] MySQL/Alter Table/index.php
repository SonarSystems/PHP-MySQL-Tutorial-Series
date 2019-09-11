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

/*$query = $connection->prepare( "SELECT id, username FROM Users LIMIT 2" );
//$query = $connection->prepare( "SELECT id, username FROM Users WHERE id<=3" );
//$query->execute( );

$result = $query->setFetchMode( PDO::FETCH_ASSOC );

foreach( new RecursiveArrayIterator( $query->fetchAll( ) ) as $key => $value )
{
    echo $value["id"]." : ".$value["username"]."<br />";
}*/

/*$query = $connection->prepare( "
ALTER TABLE NewUsers
ADD newrow int
" );
*/

/*$query = $connection->prepare( "
ALTER TABLE NewUsers
DROP COLUMN newrow
" );*/

$query = $connection->prepare( "
ALTER TABLE NewUsers
MODIFY COLUMN username varchar(64)
" );

$query->execute( );

$connection = null;

?>








