<?php
declare(strict_types=1);
namespace jsys\types\email;
class Subject implements SubjectInterface
{
    private $subject;
    const MAX_LENGTH = 998;
    public function __construct(string $subject)
    {
        if (strlen($subject) > self::MAX_LENGTH) {
            throw new \InvalidArgumentException('Given string should not be greater then 998', 1004);
        }
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
}