<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

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
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Address")
     * @JoinColumn(name="address_id")
     */
    private Address $address;

    /**
     * @var DistributionPoint
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\DistributionPoint")
     * @JoinColumn(name="distribution_point_id")
     */
    private DistributionPoint $distributionPoint;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getDistributionPoint(): DistributionPoint
    {
        return $this->distributionPoint;
    }

    public function setDistributionPoint(DistributionPoint $distributionPoint): static
    {
        $this->distributionPoint = $distributionPoint;

        return $this;
    }


}
