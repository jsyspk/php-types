<?php
declare(strict_types=1);


class NonZeroLengthString
{
    private $string;

    public function __construct(Astring $string)
    {
        if (mb_strlen($string->value()) == 0) {
            throw new \InvalidArgumentException("Given string ".$string->value()." is empty.", 1001);
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
