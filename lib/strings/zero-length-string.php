<?php
declare(strict_types=1);
use jsys\types\strings\ZeroLengthStringInterface;

class ZeroLengthString implements ZeroLengthStringInterface
{
    private $string;

    public function __construct(string $string)
    {
        if (mb_strlen($string) != 0) {

            throw new \InvalidArgumentException("given string '$string' is not empty.", 420);
        }
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->string;
    }

}
