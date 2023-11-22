<?php

namespace Aoc\Year2015;

require( __DIR__ . "/../src/Apartment.php"  );

$input = file_get_contents( __DIR__ . '/../input/day01.txt', FILE_USE_INCLUDE_PATH);

$a = new Apartment( $input );

echo $a->first_basement_step(), "\n";

?>