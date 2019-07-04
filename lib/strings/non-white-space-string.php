<?php
declare(strict_types=1);

use jsys\types\strings\NonWhiteSpaceStringInterface;
use jsys\types\strings\TextInterface;

class NonWhiteSpaceString implements NonWhiteSpaceStringInterface
{
    private $string;

    public function __construct(TextInterface  $string)
    {
        if(ctype_space($string->value())) {
            throw new \InvalidArgumentException("Given string ".$string->value()." contain non white space.", 1002);
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
