<?php 

namespace Aoc\Year2015;

use PHPUnit\Framework\TestCase;

final class JudgementTest extends TestCase
{
    public function testJudgement(): void
    {
        $correct_results = [
            [ 'ab', 'naughty' ],
            [ 'ugknbfddgicrmopn', 'nice' ],
            [ 'aaa', 'nice' ],
            [ 'jchzalrnumimnmhp', 'naughty' ],
            [ 'haegwjzuvuyypxyu', 'naughty' ],
            [ 'dvszwmarrgswjxmb', 'naughty' ]
        ];
        foreach ( $correct_results as $c ):
            $j = new Judgement($c[0]);
            $this->assertSame( $c[1], $j->judge() );
        endforeach;
    }


}