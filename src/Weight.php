<?php

namespace RustamAliHussaini\WeightConversions;

class Weight
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms) {}

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }

    public function toStones(): float
    {
        return $this->kilograms * 8.15747;
    }
}
