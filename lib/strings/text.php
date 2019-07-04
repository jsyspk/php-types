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
        if (empty($this->str))
        {
            return true;

        }
        return false;
    }

    public function length():int
    {
        return mb_strlen($this->str);
    }

    public function hasSpace():bool
    {
        if (strpos($this->str," "))
        {
            return true;

        }
        return false;
    }

    public function isSpace():bool
    {
        if (ctype_space($this->str))
        {
            return true;
        }
        return false;
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
