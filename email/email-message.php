<?php

declare(strict_types=1);

namespace jsys\types\email;


class EmailMessage implements Message
{
    private $message;

    public function __construct(string $message)
    {
         $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
