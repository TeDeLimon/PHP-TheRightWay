<?php

//? Estructuras de control ( if, else, elseif, switch, while, do while, for, foreach, break, continue, return)

//? if, else, elseif

$puntuacion = 10;

if ($puntuacion > 5) {
    // echo "Felicidades, has aprobado";
} else if ($puntuacion === 5) {
    // echo "Por los pelos";
} else {
    // echo "Lo siento, has suspendido";
}


$score = 93;

if ($score >= 99) {
    // echo "S";
} else if ($score >= 90) {
    // echo "A";
} else if ($score >= 80) {
    // echo "B";
} else if ($score >= 70) {
    // echo "C";
} else if ($score >= 60) {
    // echo "D";
} else {
    // echo "F";
}

//? switch
switch (true) {
    case $score >= 99:
        // echo "S";
        break;
    case $score >= 90:
        // echo "A";
        break;
    case $score >= 80:
        // echo "B";
        break;
    case $score >= 70:
        // echo "C";
        break;
    case $score >= 60:
        // echo "D";
        break;
    default:
        // echo "F";
}

//? while, do while, for, foreach

$i = 0;

while ($i < 5) {
    //echo $i . " ";
    $i++;
}

$i = 0;

do {
    //echo $i . " ";
    $i++;
} while ($i < 0);


$names = ['David', 'Alex', 'Juan'];

for ($i = 0, $count = count($names); $i < $count; $i++) {
    echo $names[$i] . PHP_EOL;
}

$stack = [
    'frontend' => 'JavaScript',
    'backend' => 'PHP',
    'database' => 'MySQL'
];

foreach ($stack as $clave => $tecnologia) {
    //echo "El índica es: $clave y su valor es: $tecnologia" . PHP_EOL;
}

// Ejercicio: Es mostrar un array de forma inversa utilizando un bucle

for ($i = count($names) - 1; $i >= 0; $i--) {
    //echo $names[$i] . PHP_EOL;
}

$stackInverso = array_reverse($stack);

// var_dump($stackInverso);

$invertido = array_values($stack);

for ($i = count($invertido) - 1; $i >= 0; $i--) {
    //echo $invertido[$i] . PHP_EOL;
}


$invertido = [];

foreach ($stack as $tecnologia) {
    $invertido[] = $tecnologia;
}


//? Eficiencia
function esperar()
{
    sleep(3);

    return 3;
}
/* 
if(esperar() === 1) {
    //Do something
} else if (esperar() === 2) {
    // Do Something
} else if (esperar() === 3) {
    echo "Si soy igual a 3";
} else {

} */

/* switch (esperar()) {
    case 1:
        echo "S";
        break;
    case 2:
        echo "A";
        break;
    case 3:
        echo "B";
        break;
} */



