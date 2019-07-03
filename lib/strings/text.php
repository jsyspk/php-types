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

    public function isEmpty(string $str):bool
    {
        if (!empty($str))
        {
            throw new \InvalidArgumentException("Non empty '$str' is not Allowed", 1021);

        }
        return true;
    }

    public function length(string $str):int
    {
        return mb_strlen($str);
    }
    public function hasSpace(string $str)
    {
        if (!strpos($str," "))
        {
            throw new \InvalidArgumentException("Given '$str' has atleast one space", 1027);

        }
        return true;
    }

    public function isSpace(string $str)
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
    public function __toString(): string
    {
        return $this->str;
    }
}
