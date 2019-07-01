<?php
declare(strict_types=1);

use jsys\types\strings\WhiteSpaceStringInterface;

class WhiteSpaceString implements WhiteSpaceStringInterface
{
    private $string;

    public function __construct(string  $string)
    {
        if(!ctype_space($string)) {
            throw new \InvalidArgumentException("Given string '$string' doesnot contain white space.", 1001);
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
