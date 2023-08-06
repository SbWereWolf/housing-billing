<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeteringDevice
 *
 * @ORM\Table(name="metering_device", uniqueConstraints={@ORM\UniqueConstraint(name="metering_device_product_distributor_point_model_start_ux", columns={"product_id", "distributor_id", "distribution_point_id", "metering_device_model_id", "start"})})
 * @ORM\Entity(repositoryClass="App\Repository\MeteringDeviceRepository")
 */
class MeteringDevice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="metering_device_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metering_device_model_id", type="bigint", nullable=true)
     */
    private $meteringDeviceModelId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start", type="datetimetz", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finish", type="datetimetz", nullable=true)
     */
    private $finish;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial", type="text", nullable=true)
     */
    private $serial;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="bigint", nullable=true)
     */
    private $productId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distributor_id", type="bigint", nullable=true)
     */
    private $distributorId;

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

    public function getMeteringDeviceModelId(): ?string
    {
        return $this->meteringDeviceModelId;
    }

    public function setMeteringDeviceModelId(?string $meteringDeviceModelId): static
    {
        $this->meteringDeviceModelId = $meteringDeviceModelId;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(?\DateTimeInterface $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getFinish(): ?\DateTimeInterface
    {
        return $this->finish;
    }

    public function setFinish(?\DateTimeInterface $finish): static
    {
        $this->finish = $finish;

        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(?string $serial): static
    {
        $this->serial = $serial;

        return $this;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getDistributorId(): ?string
    {
        return $this->distributorId;
    }

    public function setDistributorId(?string $distributorId): static
    {
        $this->distributorId = $distributorId;

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
