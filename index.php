<?php

$names =['Renan', 'Joao', 'Maria'];

for($i = 0; $i < count($names); $i++) {
    if($i === 1){
        continue;
    }
    echo $names[$i];
}