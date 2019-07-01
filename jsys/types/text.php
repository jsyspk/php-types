<?php
declare(strict_types=1);


namespace jsys\types;

class Text implements TextInterface
{
    private $str;
    public function __construct(string $str)
    {
        if ($this->isEmpty($str) && $this->length($str) && $this->hasSpaces($str))
        {
            $this->str = $str;
        }
    }

    private function isEmpty(string $str)
    {
        if (!empty($str))
        {
            throw new \InvalidArgumentException("Non empty '$str' is not Allowed", 1021);

        }
        return true;
    }

    private function length(string $str)
    {
        if(!mb_strlen($str))
        {
            throw new \InvalidArgumentException(''.$str.' should have some length', 1801);

        }
        return true;
    }
    private function hasSpaces(string $str)
    {
        if (!ctype_space($str))
        {
            throw new \InvalidArgumentException("Given '$str' has no space", 1023);

        }
        return true;
    }

    public function getText(): string
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
