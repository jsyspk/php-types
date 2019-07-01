<?php
declare(strict_types=1);

use jsys\types\NameInterface;

class Name implements NameInterface
{
    private $string;
    private $whiteSpaceString;
    private $nonWhiteSpaceString;
    private $zeroLengthString;
    private $nonZeroLengthString;
    public function __construct(WhiteSpaceString $whiteSpaceString, NonWhiteSpaceString $nonWhiteSpaceString, ZeroLengthString $zeroLengthString, NonZeroLengthString $nonZeroLengthString,  $string)
    {

        $this->string = $string;
        $this->whiteSpaceString = $whiteSpaceString;
        $this->nonWhiteSpaceString = $nonWhiteSpaceString;
        $this->zeroLengthString = $zeroLengthString;
        $this->nonZeroLengthString = $nonZeroLengthString;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->string;
    }

}
