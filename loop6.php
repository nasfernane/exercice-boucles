<?php

$input = [3, 5, 2, 7, 1];
$output = [];

// for ($i = 0; $i < count($input); $i++) {
//   $minIndex = $i;
//   for ($j = $i + 1; $j < count($input); $j++) {
//     if ($input[$j] < $input[$minIndex]) {
//       $minIndex = $j;
//     }
//   }
//   $min = $input[$minIndex];
//   $input[$minIndex] = $input[$i];
//   $output[] = $min;
// }

// 1. Trouver ce que fait la boucle contenue dans le fichier, et déduire la valeur de la variable $output, mais sans exécuter le fichier dans votre terminal. Une feuille de papier, un stylo, et vous exécuterez le code "à la main".

// $output = [1, 2, 3, 5, 7];

// 2. Réécrire la boucle en utilisant les autres types de boucles que vous connaissez. Par exemple si le fichier contient une boucle for, vous devrez la réécrire en utilisant une boucle while, puis une boucle foreach.

// $i = 0;
// while ($i < count($input)) {
//     $minIndex = $i;
//     for($j = $i + 1; $j < count($input); $j++) if ($input[$j] < $input[$minIndex]) $minIndex = $j;
//     $min = $input[$minIndex];
//     $input[$minIndex] = $input[$i];
//     $output[] = $min; 
//     $i++;
// }


// 3. Mettre la boucle dans une fonction, à laquelle vous donnerez un nom qui correspond à ce que fait la boucle.

// function organize(array $args) {
//         global $output;
//         $i = 0;
//         while ($i < count($args)) {
//             $minIndex = $i;
//             for($j = $i + 1; $j < count($args); $j++) if ($args[$j] < $args[$minIndex]) $minIndex = $j;
//             $min = $args[$minIndex];
//             $args[$minIndex] = $args[$i];
//             $output[] = $min; 
//             $i++;
//         }

//         print_r($output);
// }

// organize($input);

// 4. Déterminer la signature de cette fonction.

// function foo(array $args1): array

// 5. Trouver si une fonction de la bibliothèque standard PHP équivalente existe.

// usort();