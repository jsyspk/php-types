<?php
declare(strict_types=1);

use jsys\types\strings\WhiteSpaceStringInterface;
use jsys\types\strings\TextInterface;
class WhiteSpaceString implements WhiteSpaceStringInterface
{
    private $string;

    public function __construct(TextInterface  $string)
    {
        if(!ctype_space($string->value())) {
            throw new \InvalidArgumentException("Given string ".$string->value()." doesnot contain white space.", 1001);
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
