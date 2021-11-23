<?php

declare(strict_types=1);

namespace App;

final class TimeSensitive
{
    public function __invoke(): int
    {
        return time();
    }
}
