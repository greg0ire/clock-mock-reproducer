<?php

declare(strict_types=1);

namespace App\Tests;

use App\TimeSensitive;
use PHPUnit\Framework\TestCase;
use Symfony\Bridge\PhpUnit\ClockMock;

final class TimeSensitiveTest extends TestCase
{
    public function testTimeIsInteger(): void
    {
        self::assertIsInt((new TimeSensitive())());
    }

    public function testArbitraryTime(): void
    {
        ClockMock::register(TimeSensitive::class);
        ClockMock::withClockMock(100);
        self::assertSame(100, (new TimeSensitive())());
    }
}
