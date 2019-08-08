<?php

$selection = "Menu";

for ( $i = 0; $i < 10; $i++ )
{
    if ( $selection == "Menu" && $i == 5 )
    {
        continue;
    }
    
    echo "$i<br />";
}

echo "END OF CODE";

?>









