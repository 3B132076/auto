<?php
require __DIR__ . '/vendor/autoload.php';

use Demo\HelloWorld;
use Demo\Hello\Someone;
use Demo\Hello\Lara;

$helloWorld = new HelloWorld();
echo $helloWorld->greet(); // 應輸出：Hello, World!

$someone = new Someone();
echo $someone->sayHi(); // 應輸出：Hi, Someone here!

$lara = new Lara();
echo $lara->sayHello(); // 應輸出：Hello from Lara!
