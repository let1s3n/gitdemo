<?php
namespace Hackspace;
include 'suma.php';

use Hackspace\Suma;

# operacion1 sumar 3,4
# operacion2 suma  5,8

$suma = new Suma(3,4);
echo $suma->ejecutar();
echo "\n";

$suma = new Suma(5,8);
echo $suma->ejecutar();
echo "\n";
