<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ConversionRatio
 *
 * @ORM\Table(name="conversion_ratio")
 * @ORM\Entity
 */
class ConversionRatio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="conversion_ratio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="source_units_of_measure_id", type="bigint", nullable=true)
     */
    private $sourceUnitsOfMeasureId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_units_of_measure_id", type="bigint", nullable=true)
     */
    private $targetUnitsOfMeasureId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSourceUnitsOfMeasureId(): ?string
    {
        return $this->sourceUnitsOfMeasureId;
    }

    public function setSourceUnitsOfMeasureId(?string $sourceUnitsOfMeasureId): static
    {
        $this->sourceUnitsOfMeasureId = $sourceUnitsOfMeasureId;

        return $this;
    }

    public function getTargetUnitsOfMeasureId(): ?string
    {
        return $this->targetUnitsOfMeasureId;
    }

    public function setTargetUnitsOfMeasureId(?string $targetUnitsOfMeasureId): static
    {
        $this->targetUnitsOfMeasureId = $targetUnitsOfMeasureId;

        return $this;
    }


}
