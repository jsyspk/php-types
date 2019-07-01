<?php
declare(strict_types=1);


namespace jsys\types\strings;

class Text implements TextInterface
{
    private $str;
    public function __construct(string $str)
    {
        {
            $this->str = $str;
        }
    }

    public function isEmpty(string $str)
    {
        if (!empty($str))
        {
            throw new \InvalidArgumentException("Non empty '$str' is not Allowed", 1021);

        }
        return true;
    }

    public function length(string $str)
    {
        if(!mb_strlen($str))
        {
            throw new \InvalidArgumentException(''.$str.' should have some length', 1801);

        }
        return true;
    }
    public function hasSpaces(string $str)
    {
        if (!ctype_space($str))
        {
            throw new \InvalidArgumentException("Given '$str' has no space", 1023);

        }
        return true;
    }

    public function value(): string
    {
        return $this->str;
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }
}
