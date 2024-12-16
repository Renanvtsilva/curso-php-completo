<?php
 
function teste($name,$age){
    return 'Ola meu nome é ' . $name . ' e minha idade é ' . $age;
}

echo call_user_func_array('teste', ['Renan', '24']);