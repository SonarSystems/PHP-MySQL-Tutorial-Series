<?php

$usernameVar = $_GET["username"];
$passwordVar = $_GET["password"];

echo $usernameVar." : ".$passwordVar;

?>

<html>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="GET">
            Username: <input type="text" name="username" /><br />
            Password: <input type="password" name="password" /><br />
            
            <input type="submit" />
        </form>
    </body>
</html>





