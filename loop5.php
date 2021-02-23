<?php

$input = [3, 4, 3, 1, 5, 4];

$output = [];

// foreach ($input as $value) {
//   if (!in_array($value, $output)) {
//     $output[] = $value;
//   }
// }


// 1. Trouver ce que fait la boucle contenue dans le fichier, et déduire la valeur de la variable $output, mais sans exécuter le fichier dans votre terminal. Une feuille de papier, un stylo, et vous exécuterez le code "à la main".

// $output = [3, 4, 1, 5]

// 2. Réécrire la boucle en utilisant les autres types de boucles que vous connaissez. Par exemple si le fichier contient une boucle for, vous devrez la réécrire en utilisant une boucle while, puis une boucle foreach.
// $i = 0;
// while ($i < count($input)) {
//     if (!in_array($input[$i], $output)) $output[] = $input[$i];
//     $i++;
// }

// 3. Mettre la boucle dans une fonction, à laquelle vous donnerez un nom qui correspond à ce que fait la boucle.

// function pushOnce(array $args, array $args2) {
//     foreach ($args as $value) {
//         if (!in_array($value, $args2)) {
//             $args2[] = $value;
//         }
//     }
//     print_r($args2);
        // return $args2;
// }

// pushOnce($input, $output);
// 4. Déterminer la signature de cette fonction.

// function foo(array $args1, array $args2): array
// 5. Trouver si une fonction de la bibliothèque standard PHP équivalente existe.

// array_unique();