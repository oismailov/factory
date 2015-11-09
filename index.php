<?php

function __autoload($name)
{

    if (file_exists("$name.php")) {
        require_once "$name.php";
    }
}

$factory = new Factory();

$factory->addType(new MyHydra1());
$factory->addType(new MyHydra2());

var_dump($factory->createMyHydra(2));

