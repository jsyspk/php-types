<?php
/**
 * Created by PhpStorm.
 * User: Hussnain Shahid
 * Date: 6/28/2019
 * Time: 9:28 AM
 */
declare(strict_types=1);

namespace jsys\types\email;


class Recipient implements AddressInterface,RecipientInterface,NameInterface
{
    private $recipient;
    private $address;
    private $name;

    public function __construct(AddressInterface $address,string $recipient,NameInterface $name=null)
{
        $this->recipient = $recipient;
        $this->address = $address->getEmail();
        $this->name = $name;
    }
   public function getEmail(): string
   {
       return $this->address;
   }
    public function getRecipient():string
    {
        return $this->recipient;
    }
    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

}