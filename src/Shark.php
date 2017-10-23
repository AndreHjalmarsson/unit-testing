<?php

declare(strict_types=1);

namespace Yrgo;

use Yrgo\Weapons\Weapon;

class Shark
{
    protected $weapon;

    public function __construct(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }
}
