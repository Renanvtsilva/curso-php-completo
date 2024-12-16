<?php
 
$user = function ($name){
    return 'teste ' . $name;
};

function teste($callback)
{
    return call_user_func_array($callback,['Renan']);
}

echo teste($user);