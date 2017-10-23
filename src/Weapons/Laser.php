<?php

declare(strict_types=1);

namespace Yrgo\Weapons;

use InvalidArgumentException;

class Laser extends Weapon
{
    protected $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $colors = ['cyan', 'hotpink', 'lime', 'tomato'];

        if (!in_array($color, $colors)) {
            throw new InvalidArgumentException("Invalid laser color [$color].");
        }

        $this->color = $color;
    }
}
