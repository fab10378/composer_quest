<?php

require __DIR__. '/../vendor/autoload.php';

use src\wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello;
echo $hello->talk();

$sayhello = new SayHello;
echo $sayhello->world();