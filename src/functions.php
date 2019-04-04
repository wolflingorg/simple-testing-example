<?php

/**
 * @param float $a
 * @param float $b
 *
 * @return float|int|InvalidArgumentException
 */
function division(float $a, float $b)
{
    if ($b == 0) {
        throw new InvalidArgumentException('Division by zero');
    }

    return $a / $b;
}
