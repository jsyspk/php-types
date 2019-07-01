<?php
declare(strict_types=1);

use jsys\types\NonZeroLengthStringInterface;

class NonZeroLengthString implements NonZeroLengthStringInterface
{
    private $string;

    public function __construct(string $string)
    {
        if (mb_strlen($string) == 0) {
            throw new \InvalidArgumentException("Given string '$string' is empty.", 1001);
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
