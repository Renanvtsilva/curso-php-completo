<?php

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}else{
    echo 'Cookie inexistente';
}

