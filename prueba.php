<?php

function f(callable $c, $p)
{
    return call_user_func($c, $p);
}

$fHola = function ($nombre){
    echo "Hola " . $nombre . "<br><br>";
};

f($fHola, 'Pepe');

$o = new DateTime;

echo f([$o, 'format'], 'd-m-Y');
//echo f(['o->format'], 'd-m-Y');


function fPrueba($p)
{
    echo "Esta es una funcion de prueba " . $p;
}

echo "<br>";
echo "<br>";

echo f('fPrueba', 'pepito');
