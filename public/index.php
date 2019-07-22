<?php
require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$gaetan = new Hello();
echo $gaetan->talk() . "</br>";

$wcs = new SayHello();
echo $wcs->world();

?>