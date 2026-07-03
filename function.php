<?php

function view($view, $data = [])
{

    foreach ($data as $key => $value) {
        $$key = $value;
    }



    require "view/template/app.php";
}


function view2($view2, $data = [])
{

    foreach ($data as $key => $value) {
        $$key = $value;
    }



    require "view/template/app2.php";
}




function dd(...$dump)
{

    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}

function abort($code)
{

    http_response_code($code);
    view($code);
    die();
}


function flash(){
    return new flash;
}

function config($chave = null){

    $config = require 'config.php';

    if(strlen($chave) > 0){
        return $config[$chave];
    }

    return $config;

}
