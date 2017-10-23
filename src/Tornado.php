<?php

declare(strict_types=1);

namespace Yrgo;

class Tornado
{
    protected $sharks;

    public function __construct(array $sharks = [])
    {
        $this->sharks = $sharks;
    }

    public function getSharks(): array
    {
        return $this->sharks;
    }
}
