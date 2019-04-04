<?php

namespace Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    /**
     * @return array
     */
    public function positiveDataProvider()
    {
        return [
            [1, 1, 1],
            [1, 0.1, 10],
        ];
    }

    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($a, $b, $expected)
    {
        $result = division($a, $b);

        $this->assertEquals($expected, $result);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNegative()
    {
        division(1, 0);
    }
}
