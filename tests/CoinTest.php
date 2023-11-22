<?php 

namespace Aoc\Year2015;

use PHPUnit\Framework\TestCase;

final class CoinTest extends TestCase
{
    public function testCoinGeneration(): void
    {
        $correct_results = [
            [ 'abcdef', 609043 ],
            [ 'pqrstuv', 1048970 ]
        ];
        $starts_with = (string) '00000';
        foreach ( $correct_results as $c ):
            $a = new Coin( $c[0] );
            $this->assertSame( $c[1], $a->lowest( $starts_with ) );
        endforeach;
    }

}