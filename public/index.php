<?php
require ('../vendor/autoload.php');

use HelloWorld\SayHello;
use App\Wcs\Hello;

echo SayHello::world()."<br/>";
$helloworld = new Hello();
$helloworld->talk();

?>	