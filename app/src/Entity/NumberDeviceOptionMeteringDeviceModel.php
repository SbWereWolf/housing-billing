<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * NumberDeviceOptionMeteringDeviceModel
 *
 * @ORM\Table(name="number_device_option_metering_device_model")
 * @ORM\Entity
 */
class NumberDeviceOptionMeteringDeviceModel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="number_device_option_metering_device_model_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="device_option_id", type="bigint", nullable=true)
     */
    private $deviceOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metering_device_model_id", type="bigint", nullable=true)
     */
    private $meteringDeviceModelId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number_value", type="decimal", precision=18, scale=6, nullable=true)
     */
    private $numberValue;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getDeviceOptionId(): ?string
    {
        return $this->deviceOptionId;
    }

    public function setDeviceOptionId(?string $deviceOptionId): static
    {
        $this->deviceOptionId = $deviceOptionId;

        return $this;
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

    public function getNumberValue(): ?string
    {
        return $this->numberValue;
    }

    public function setNumberValue(?string $numberValue): static
    {
        $this->numberValue = $numberValue;

        return $this;
    }


}
