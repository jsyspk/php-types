<?php
declare(strict_types=1);


namespace jsys\types\strings;

class AString implements SomeString
{
    private $str;
    public function __construct(string $str)
    {
            $this->str = $str;
    }

    public function isEmpty():bool
    {
        return empty($this->str)?true:false;
    }

    public function length():int
    {
        return mb_strlen($this->str);
    }

    public function hasSpace():bool
    {
        return strpos($this->str," ")?true:false;
    }

    public function isSpace():bool
    {
        return ctype_space($this->str)?true:false;
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
