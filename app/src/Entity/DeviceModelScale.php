<?php

namespace App\Entity;

use App\Entity\Column\HasModel;
use App\Entity\Column\HasPurpose;
use App\Entity\Column\HasScale;
use App\Entity\Column\HasUnitsOfMeasure;
use Doctrine\ORM\Mapping as ORM;
use Stringable;

/**
 * DeviceModelScale
 */
#[ORM\Table(name: 'device_model_scale')]
#[ORM\UniqueConstraint(name: 'device_model_scale_metering_device_model_id_id_ux', columns: ['metering_device_model_id', 'id'])]
#[ORM\Entity(repositoryClass: \App\Repository\DeviceModelScaleRepository::class)]
class DeviceModelScale implements Stringable
{
    use HasModel;
    use HasScale;
    use HasUnitsOfMeasure;
    use HasPurpose;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'device_model_scale_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return
            "{$this->getUnitsOfMeasure()->getCode()}," .
            " {$this->getPurpose()->getCode()}," .
            " #{$this->getScale()->getCode()}";
    }
}
