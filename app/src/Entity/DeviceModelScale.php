<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * DeviceModelScale
 *
 * @ORM\Table(name="device_model_scale", uniqueConstraints={@ORM\UniqueConstraint(name="device_model_scale_metering_device_model_id_id_ux", columns={"metering_device_model_id", "id"})})
 * @ORM\Entity
 */
class DeviceModelScale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="device_model_scale_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metering_device_model_id", type="bigint", nullable=true)
     */
    private $meteringDeviceModelId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="measuring_scale_id", type="bigint", nullable=true)
     */
    private $measuringScaleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readings_purpose_id", type="bigint", nullable=true)
     */
    private $readingsPurposeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="units_of_measure_id", type="bigint", nullable=true)
     */
    private $unitsOfMeasureId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getMeteringDeviceModelId(): ?string
    {
        return $this->meteringDeviceModelId;
    }

    public function setMeteringDeviceModelId(?string $meteringDeviceModelId): static
    {
        $this->meteringDeviceModelId = $meteringDeviceModelId;

        return $this;
    }

    public function getMeasuringScaleId(): ?string
    {
        return $this->measuringScaleId;
    }

    public function setMeasuringScaleId(?string $measuringScaleId): static
    {
        $this->measuringScaleId = $measuringScaleId;

        return $this;
    }

    public function getReadingsPurposeId(): ?string
    {
        return $this->readingsPurposeId;
    }

    public function setReadingsPurposeId(?string $readingsPurposeId): static
    {
        $this->readingsPurposeId = $readingsPurposeId;

        return $this;
    }

    public function getUnitsOfMeasureId(): ?string
    {
        return $this->unitsOfMeasureId;
    }

    public function setUnitsOfMeasureId(?string $unitsOfMeasureId): static
    {
        $this->unitsOfMeasureId = $unitsOfMeasureId;

        return $this;
    }


}
