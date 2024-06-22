<?php

namespace App\Entity\Column;

use App\Entity\Address;
use Doctrine\ORM\Mapping as ORM;

trait HasAddress
{
    /**
     * @var Address
     */
    #[ORM\JoinColumn(name: 'address_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\Address::class)]
    protected Address $address;

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): static
    {
        $this->address = $address;

        return $this;
    }
}