<?php

$input = [8, 6, 2, 9, 2, 1, 7];

$output = null;
$i = 0;

while ($i < count($input)) {
  if ($output < $input[$i]) {
    $output = $input[$i];
  }
  $i++;
}

// 1. Trouver ce que fait la boucle contenue dans le fichier, et déduire la valeur de la variable $output, mais sans exécuter le fichier dans votre terminal. Une feuille de papier, un stylo, et vous exécuterez le code "à la main".
// $output = 9

// 2. Réécrire la boucle en utilisant les autres types de boucles que vous connaissez. Par exemple si le fichier contient une boucle for, vous devrez la réécrire en utilisant une boucle while, puis une boucle foreach.

// for ($i = 0; $i < count($input); $i++) if ($output < $input[$i]) $output = $input[$i];

// 3. Mettre la boucle dans une fonction, à laquelle vous donnerez un nom qui correspond à ce que fait la boucle.

// function getHigherNumber($array) {
//     global $output;
//     foreach ($array as $number) if ($output < $number) $output = $number;
//     return $output;
// }

// getHigherNumber($input);


// 4. Déterminer la signature de cette fonction.

// function foo(array $array) : int

// 5. Trouver si une fonction de la bibliothèque standard PHP équivalente existe.

// fonction max()