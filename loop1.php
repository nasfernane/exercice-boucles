  
<?php

$input = [2, 5, 3, 1, 0];

$output = [];

// for ($i = 0; $i < count($input); $i++) {
//   $output[] = $input[$i] * 2;
// }

// 1. Trouver ce que fait la boucle contenue dans le fichier, et déduire la valeur de la variable $output, mais sans exécuter le fichier dans votre terminal. Une feuille de papier, un stylo, et vous exécuterez le code "à la main".

// $output = ? [4, 10, 6, 2, 0];

// 2. Réécrire la boucle en utilisant les autres types de boucles que vous connaissez. Par exemple si le fichier contient une boucle for, vous devrez la réécrire en utilisant une boucle while, puis une boucle foreach.

// while (count($output) < count($input)) $output[] = $input[count($output)] * 2;
// foreach ($input as $number) $output[] = $number * 2;

// 3. Mettre la boucle dans une fonction, à laquelle vous donnerez un nom qui correspond à ce que fait la boucle.

// function doubleNumbers(array $numbers) {
//     foreach ($numbers as $number) {
//         global $output;
//         $output[] = $number * 2;
//     }
// }

// doubleNumbers(2, 5, 3, 1, 0);

// 4. Déterminer la signature de cette fonction.

// function foo(array $args)

// 5. Trouver si une fonction de la bibliothèque standard PHP équivalente existe.

// J'en ai pas trouvé