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
     * @var int|null
     *
     * @ORM\Column(name="primary_metering_point_id", type="bigint", nullable=true)
     */
    private $primaryMeteringPointId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="secondary_metering_point_id", type="bigint", nullable=true)
     */
    private $secondaryMeteringPointId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPrimaryMeteringPointId(): ?string
    {
        return $this->primaryMeteringPointId;
    }

    public function setPrimaryMeteringPointId(?string $primaryMeteringPointId): static
    {
        $this->primaryMeteringPointId = $primaryMeteringPointId;

        return $this;
    }

    public function getSecondaryMeteringPointId(): ?string
    {
        return $this->secondaryMeteringPointId;
    }

    public function setSecondaryMeteringPointId(?string $secondaryMeteringPointId): static
    {
        $this->secondaryMeteringPointId = $secondaryMeteringPointId;

        return $this;
    }


}
