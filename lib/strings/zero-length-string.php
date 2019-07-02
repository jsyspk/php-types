<?php
declare(strict_types=1);

use jsys\types\strings\ZeroLengthStringInterface;
use jsys\types\strings\TextInterface;
class ZeroLengthString implements ZeroLengthStringInterface
{
    private $string;

    public function __construct(TextInterface $string)
    {
        if (mb_strlen($string->value()) != 0) {

            throw new \InvalidArgumentException("given string ".$string->value()." is not empty.", 420);
        }
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->string->value();
    }

}
