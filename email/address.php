<?php
declare(strict_types=1);

namespace jsys\types\email;


class Address implements AddressInterface
{
    private $email;

    public function __construct(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Given string '$email' is invalid.", 1001);
        }
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}