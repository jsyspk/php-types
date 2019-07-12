<?php
declare(strict_types=1);


class ZeroLengthString
{
    private $string;

    public function __construct(Astring $string)
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
