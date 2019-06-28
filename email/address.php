<?php
/**
 * Created by PhpStorm.
 * User: Hussnain Shahid
 * Date: 6/28/2019
 * Time: 9:28 AM
 */
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