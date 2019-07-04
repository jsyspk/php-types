<?php
declare(strict_types=1);


namespace jsys\types\strings;

class Text implements TextInterface
{
    private $str;
    public function __construct(string $str)
    {
            $this->str = $str;
    }

    public function isEmpty():bool
    {
        if (!empty($this->str))
        {
            throw new \InvalidArgumentException("Non empty '$this->str' is not Allowed", 1021);

        }
        return true;
    }

    public function length():int
    {
        return mb_strlen($this->str);
    }
    public function hasSpace():bool
    {
        if (!strpos($this->str," "))
        {
            throw new \InvalidArgumentException("Given '$this->str' has atleast one space", 1027);

        }
        return true;
    }

    public function isSpace():bool
    {
        if (!ctype_space($this->str))
        {
            throw new \InvalidArgumentException("Given '$this->str' has no space", 1023);

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
