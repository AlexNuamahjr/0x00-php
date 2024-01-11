
<?php

function dd($value){
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    dd($value);
}

$uri = $_SERVER['REQUEST_URI'];