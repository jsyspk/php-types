<?php

declare(strict_types=1);

namespace jsys\types\email;


class Subject implements SubjectInterface
{
    private $subject;
    const MAX_LENGTH = 1024;

    public function __construct(string $subject)
    {
        if (strlen($subject) > self::MAX_LENGTH) {
            throw new \InvalidArgumentException('Given string ' .self::MAX_LENGTH. ' should not be greater then 1024', 1004);
        }
        $this->subject = $subject;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }
}