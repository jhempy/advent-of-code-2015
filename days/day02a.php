<?php

namespace Aoc\Year2015;

require( __DIR__ . "/../src/Gift.php"  );

$input = file_get_contents( __DIR__ . '/../input/day02.txt', FILE_USE_INCLUDE_PATH);

$dimensions = explode( "\n", $input );

$total = 0;

foreach ($dimensions as $d):
    $g = new Gift( $d );
    $total += $g->calculate_wrapping_paper();
endforeach;

echo $total, "\n";

?>