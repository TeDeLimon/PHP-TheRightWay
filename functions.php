<?php

declare(strict_types=1);

function foo()
{
    // Do something
}

// Functions que retorna datos
function function_return(): string
{
    return 'Hello World';
}

//Funciones que aceptan parametros y retornan datos
function function_param(string $name): string
{
    return 'Hello ' . $name;
}


// Funciones que aceptan parámetros con valores predeterminados
function function_default(string $name = 'World'): string
{
    return 'Hello ' . $name;
}

$saludo = function_default();

// echo $saludo;

// Funciones que aceptan parámetros opciones
function function_optional(?int $number = null): string
{
    return 'Soy el número ' . $number;
}

// echo function_optional();

// Funciones que no retornan nada
function function_void(): string|int
{
    return 199;
}

function_void();

//? Funciones que aceptan parámetros múltiples

/**
 * @param int $a Primer número
 * @param int $b Segundo número
 * @param int ...$valores N cantidad de números
 */
function suma(int $a, int $b, int ...$valores): int
{
    // return array_sum([$a, $b, ...$valores]);

    $acumulador = $a + $b;

    foreach ($valores as $valor) {
        $acumulador += $valor;
    }

    return $acumulador;
}

$resultado = suma(1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

var_dump($resultado);

//? Funciones con parámetros desordenados

function restaurante(string $entrada, string $principal, string $postre): string
{
    return "Entrada: $entrada, Principal: $principal, Postre: $postre";
}

echo restaurante(postre: 'Ensalada', entrada: 'Pollo', principal: 'Flan');

// Ejercicio: Realizar una función que obtiene el total de la cantidad gastada por todos los usuarios
// Ejercicio: Una función que devuelve el usuario que más dinero ha gastado
// Ejercicio: Una función que devuelve el usuario que menos dinero ha gastado

// Ejercicio: Realizar una función que devuelve aleatoriamente el usuario dentro del que más ha gastado y el que menos

$usuarios = [
    "Paco" => 25.2,
    "Juan" => 30.3,
    "Maria" => 15.5,
    "Ana" => 10.5,
    "Pedro" => 20.5,
    "Luis" => 5.5,
    "Daniel" => 50.5,
    "Sara" => 40.5,
    "Lucia" => 35.5
];
