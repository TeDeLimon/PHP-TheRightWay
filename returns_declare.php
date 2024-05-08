<?php

// Retornar significa devolver un valor de una función
function sumarEnteros(int $x, int $y): int
{
    return $x + $y;
}

function sumarFlotantes(float $x, float $y): float
{
    return $x + $y;
}

$resultado = sumarEnteros(10, 20);

$decimal = sumarFlotantes(10.5, 20.5);

/* function hacerClick()
{
    var_dump('Click');
}

register_tick_function('hacerClick');

declare(ticks=3);

for ($i = 0; $i < 10; $i++) {
    echo $i . PHP_EOL;
} */

function realizarCalculos(mixed $x, mixed $y): array
{
    return [
        'suma' => $x + $y,
        'resta' => $x - $y,
        'multiplicacion' => $x * $y,
        'division' => $x / $y
    ];
}

$resultado = realizarCalculos(10, 20);

var_dump($resultado);
