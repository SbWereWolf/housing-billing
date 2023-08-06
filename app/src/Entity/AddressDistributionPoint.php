<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * AddressDistributionPoint
 *
 * @ORM\Table(name="address_distribution_point", uniqueConstraints={@ORM\UniqueConstraint(name="address_distribution_point_address_id_distribution_point_id_ux", columns={"address_id", "distribution_point_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\AddressDistributionPointRepository")
 */
class AddressDistributionPoint
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="address_distribution_point_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="address_id", type="bigint", nullable=true)
     */
    private $addressId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distribution_point_id", type="bigint", nullable=true)
     */
    private $distributionPointId;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getDistributionPointId(): ?string
    {
        return $this->distributionPointId;
    }

    public function setDistributionPointId(?string $distributionPointId): static
    {
        $this->distributionPointId = $distributionPointId;

        return $this;
    }


}
