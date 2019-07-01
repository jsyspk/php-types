<?php
declare(strict_types=1);

use jsys\types\strings\NonWhiteSpaceStringInterface;

class NonWhiteSpaceString implements NonWhiteSpaceStringInterface
{
    private $string;

    public function __construct(string  $string)
    {
        if(ctype_space($string)) {
            throw new \InvalidArgumentException("Given string '$string' contain non white space.", 1002);
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
