<?php
declare(strict_types=1);

class NonWhiteSpaceString
{
    private $string;

    public function __construct(Astring  $string)
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
