<?php

$urlError = "";
$passwordError = "";

$urlRaw = "";

function Validate( $data )
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    
    return $data;
}

if ( $_SERVER["REQUEST_METHOD"] == "POST" )
{
    $urlRaw = $_POST["url"];
    $urlVar = Validate( $urlRaw );
    $passwordVar = Validate( $_POST["password"] );
    
    if ( empty( $_POST["url"] ) )
    {
        $urlError = "URL is empty";
    }
    else
    {
        if ( !preg_match( "/^http:\/\/|(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/", $urlVar ) )
        {
            $urlError = "This is an invalid URL format";
        }
    }
    
    if ( empty( $_POST["password"] ) )
    {
        $passwordError = "Password is empty";
    }
}

?>

<html>
    <head>
        <style>
            .error
            {
                color: red;
                font-size: 10px;
            }
        </style>
    </head>
    
    <body>    
        <h1>Login Page</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            URL: <input type="text" name="url" value="<?php echo $urlRaw; ?>" /><br />
            <div class="error"><?php echo $urlError; ?></div>
            Password: <input type="password" name="password" /><br />
            <div class="error"><?php echo $passwordError; ?></div>
            
            <input type="submit" />
        </form>
    </body>
</html>





