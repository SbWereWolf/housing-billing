<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeasuringScale
 */
#[ORM\Table(name: 'measuring_scale')]
#[ORM\UniqueConstraint(name: 'measuring_scale_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: \App\Repository\MeasuringScaleRepository::class)]
class MeasuringScale extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'measuring_scale_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'readings_limit', type: 'bigint', nullable: true)]
    private $readingsLimit;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'readings_resolution', type: 'bigint', nullable: true)]
    private $readingsResolution;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getReadingsLimit(): ?string
    {
        return $this->readingsLimit;
    }

    public function setReadingsLimit(?string $readingsLimit): static
    {
        $this->readingsLimit = $readingsLimit;

        return $this;
    }

    public function getReadingsResolution(): ?string
    {
        return $this->readingsResolution;
    }

    public function setReadingsResolution(?string $readingsResolution): static
    {
        $this->readingsResolution = $readingsResolution;

        return $this;
    }
}
