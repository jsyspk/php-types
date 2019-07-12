<?php
declare(strict_types=1);


class WhiteSpaceString
{
    private $string;

    public function __construct(Astring  $string)
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
