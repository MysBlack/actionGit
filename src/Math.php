<?php

declare(strict_types=1);

namespace App;

final class Math
{
    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }
    public static function sub(float $a, float $b): float
    {
        return $a - $b;
    }
    public static function mul(float $a, float $b): float
    {
        return $a * $b;
    }
    public static function div(float $a, float $b): float
    {
        if ($b == 0.0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        return $a / $b;
    }
}
