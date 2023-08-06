<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * AddressLocationOption
 *
 * @ORM\Table(name="address_location_option")
 * @ORM\Entity
 */
class AddressLocationOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="address_location_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="billing_option_id", type="bigint", nullable=true)
     */
    private $billingOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location_option_id", type="bigint", nullable=true)
     */
    private $locationOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="address_id", type="bigint", nullable=true)
     */
    private $addressId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBillingOptionId(): ?string
    {
        return $this->billingOptionId;
    }

    public function setBillingOptionId(?string $billingOptionId): static
    {
        $this->billingOptionId = $billingOptionId;

        return $this;
    }

    public function getLocationOptionId(): ?string
    {
        return $this->locationOptionId;
    }

    public function setLocationOptionId(?string $locationOptionId): static
    {
        $this->locationOptionId = $locationOptionId;

        return $this;
    }

    public function getAddressId(): ?string
    {
        return $this->addressId;
    }

    public function setAddressId(?string $addressId): static
    {
        $this->addressId = $addressId;

        return $this;
    }


}
