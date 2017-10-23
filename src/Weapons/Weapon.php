<?php

declare(strict_types=1);

namespace Yrgo\Weapons;

use ReflectionClass;

abstract class Weapon
{
    public function getName(): string
    {
        $reflect = new ReflectionClass($this);

        return mb_strtolower($reflect->getShortName());
    }
}
