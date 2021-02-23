<?php

$input1 = [3, 5, 1, 2, 6, 3];
$input2 = 9;

$output = false;
$i = 0;

// while ($i < count($input1)) {
//   if ($input1[$i] === $input2) {
//     $output = true;
//   }
//   $i++;
// }

// 1. Trouver ce que fait la boucle contenue dans le fichier, et déduire la valeur de la variable $output, mais sans exécuter le fichier dans votre terminal. Une feuille de papier, un stylo, et vous exécuterez le code "à la main".

// $output = false

// 2. Réécrire la boucle en utilisant les autres types de boucles que vous connaissez. Par exemple si le fichier contient une boucle for, vous devrez la réécrire en utilisant une boucle while, puis une boucle foreach.

// foreach ($input1 as $number) if ($input2 === $number) $output = true;
// var_dump($output);

// 3. Mettre la boucle dans une fonction, à laquelle vous donnerez un nom qui correspond à ce que fait la boucle.

// function checkIfArrayContains(array $array, int $numberToCheck): bool {
//     global $output;
//     foreach ($array as $number) if ($numberToCheck === $number) $output = true;
//     return $output;
// }

// 4. Déterminer la signature de cette fonction.

// function foo(array $args, int $arg) : bool

// 5. Trouver si une fonction de la bibliothèque standard PHP équivalente existe.

// fonction includes() ou in_array