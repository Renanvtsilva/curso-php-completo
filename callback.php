<?php
 
class User 
{
    public function teste ($name, $age)
    {
        return 'Olá meu nome é ' . $name . ' E minha idade é ' . $age ;
    }
}

$user = new User;

echo call_user_func([$user,'teste'], 'Renan', 23);