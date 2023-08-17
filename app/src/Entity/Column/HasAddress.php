<?php

namespace App\Entity\Column;

use App\Entity\Address;
use Doctrine\ORM\Mapping as ORM;

trait HasAddress
{
    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Address")
     * @ORM\JoinColumn(name="address_id")
     */
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