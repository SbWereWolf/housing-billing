<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * TransitMeteringPoint
 *
 * @ORM\Table(name="transit_metering_point")
 * @ORM\Entity(repositoryClass="App\Repository\TransitMeteringPointRepository")
 */
class TransitMeteringPoint
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="transit_metering_point_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var MeteringPoint
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\MeteringPoint")
     * @ORM\JoinColumn(name="primary_metering_point_id")
     */
    private MeteringPoint $primary;

    /**
     * @var MeteringPoint
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\MeteringPoint")
     * @ORM\JoinColumn(name="secondary_metering_point_id")
     */
    private MeteringPoint $secondary;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPrimary(): MeteringPoint
    {
        return $this->primary;
    }

    public function setPrimary(MeteringPoint $primary): static
    {
        $this->primary = $primary;

        return $this;
    }

    public function getSecondary(): MeteringPoint
    {
        return $this->secondary;
    }

    public function setSecondary(MeteringPoint $secondary): static
    {
        $this->secondary = $secondary;

        return $this;
    }


}
