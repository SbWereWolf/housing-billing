<?php

namespace App\Entity\Primitive;

use JetBrains\PhpStorm\Pure;

class CaptionWithCode implements \Stringable
{
    use HasCode;

    #[Pure]
    public function __toString(): string
    {
        return "{$this->getTitle()}, {$this->getCode()}";
    }
}
