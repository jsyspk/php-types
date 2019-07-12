<?php

declare(strict_types=1);

namespace jsys\types\email;


class RecipientName implements Name
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
