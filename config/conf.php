<?php

define('ROOT_DIR', realpath(__DIR__ . '/../') . "/");

function __autoload($name)
{
    $file = $file = ROOT_DIR . "inc/$name.php";

    if (file_exists($file)) {
        require_once $file;
    }
}
