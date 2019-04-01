<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
/*
require "../src/Wcs/Hello.php";
*/

if ($hello = new hello())
{
    $hello->talk();
    echo "<br/>";
}



use HelloWorld\SayHello;
echo Sayhello::world();

