<?php

/**
 * @param float $a
 * @param float $b
 *
 * @return float
 * @throws InvalidArgumentException
 */
function division(float $a, float $b): float
{
    if ($b == 0) {
        throw new InvalidArgumentException('Division by zero');
    }

    return $a / $b;
}
