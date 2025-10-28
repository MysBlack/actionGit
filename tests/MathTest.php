<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Math;

final class MathTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertSame(5.0, Math::add(2, 3));
    }
    public function testSub(): void
    {
        $this->assertSame(-1.0, Math::sub(2, 3));
    }
    public function testMul(): void
    {
        $this->assertSame(6.0, Math::mul(2, 3));
    }
    public function testDiv(): void
    {
        $this->assertSame(2.0, Math::div(6, 3));
    }
    public function testDivByZeroThrows(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Math::div(1, 0);
    }
}
