<!DOCTYPE HTML>
<html>
    <head>
        <script>
            function UserSearch( username )
            {
                var xmlhttp = new XMLHttpRequest( );
                
                xmlhttp.onreadystatechange = function( )
                {
                    if ( this.readyState == 4 && this.status == 200 )
                    {
                        document.getElementById( "Result" ).innerHTML = this.responseText;
                    }
                };
                
                xmlhttp.open( "GET", "ajax.php?username=" + username, true );
                xmlhttp.send( );
            }
        </script>
    </head>
    
    <body>
        <form>
            Number: <input type="text" onkeyup="UserSearch( this.value )" />
        </form>
        
        <div id="Result"></div>
    </body>
</html>