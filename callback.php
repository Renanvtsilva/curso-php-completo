<?php
 
function teste($name)
{
    return 'teste' . $name;
}

function teste2($callback)
{
    return call_user_func($callback,'Renan');
}

echo teste2('teste');