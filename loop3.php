 <?php

$input = [3, 5, 2, 6, 5, 6, 2, 19];

$output = [];

// foreach ($input as $number) {
//   if ($number % 2 === 0) {
//     $output[] =  $number;
//   }
// }

// 1. Trouver ce que fait la boucle contenue dans le fichier, et déduire la valeur de la variable $output, mais sans exécuter le fichier dans votre terminal. Une feuille de papier, un stylo, et vous exécuterez le code "à la main".

// $output = [2, 6, 6, 2]

// 2. Réécrire la boucle en utilisant les autres types de boucles que vous connaissez. Par exemple si le fichier contient une boucle for, vous devrez la réécrire en utilisant une boucle while, puis une boucle foreach.

// for ($i = 0; $i < count($input); $i++) if ($input[$i] % 2 === 0) $output[] = $input[$i];

// 3. Mettre la boucle dans une fonction, à laquelle vous donnerez un nom qui correspond à ce que fait la boucle.

// function getEvenNumbers(array $array) {
//     global $output;
//     for ($i = 0; $i < count($array); $i++) if ($array[$i] % 2 === 0) $output[] = $array[$i];
//     return $output
// }

// getEvenNumbers($input);

// 4. Déterminer la signature de cette fonction.

// function foo($array $args) : array

// 5. Trouver si une fonction de la bibliothèque standard PHP équivalente existe.

// négatif