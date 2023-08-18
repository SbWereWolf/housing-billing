<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RawReadings
 *
 * @ORM\Table(name="raw_readings", uniqueConstraints={@ORM\UniqueConstraint(name="raw_readings_product_id_distributor_id_point_id_id_ux", columns={"product_id", "distributor_id", "distribution_point_id", "id"})})
 * @ORM\Entity(repositoryClass="App\Repository\RawReadingsRepository")
 */
class RawReadings implements \Stringable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="raw_readings_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="readings", type="text", nullable=true)
     */
    private $readings;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="upload_time", type="datetimetz", nullable=true)
     */
    private $uploadTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="device_model_scale_id", type="bigint", nullable=true)
     */
    private $deviceModelScaleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metering_device_model_id", type="bigint", nullable=true)
     */
    private $meteringDeviceModelId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="bigint", nullable=true)
     */
    private $productId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readings_sender_id", type="bigint", nullable=true)
     */
    private $readingsSenderId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readings_way_id", type="bigint", nullable=true)
     */
    private $readingsWayId;

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="start", type="bigint", nullable=true)
     */
    private $start;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_scale_overflow", type="integer", nullable=true)
     */
    private $isScaleOverflow;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getReadings(): ?string
    {
        return $this->readings;
    }

    public function setReadings(?string $readings): static
    {
        $this->readings = $readings;

        return $this;
    }

    public function getUploadTime(): ?\DateTimeInterface
    {
        return $this->uploadTime;
    }

    public function setUploadTime(?\DateTimeInterface $uploadTime): static
    {
        $this->uploadTime = $uploadTime;

        return $this;
    }

    public function getDeviceModelScaleId(): ?string
    {
        return $this->deviceModelScaleId;
    }

    public function setDeviceModelScaleId(?string $deviceModelScaleId): static
    {
        $this->deviceModelScaleId = $deviceModelScaleId;

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

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getReadingsSenderId(): ?string
    {
        return $this->readingsSenderId;
    }

    public function setReadingsSenderId(?string $readingsSenderId): static
    {
        $this->readingsSenderId = $readingsSenderId;

        return $this;
    }

    public function getReadingsWayId(): ?string
    {
        return $this->readingsWayId;
    }

    public function setReadingsWayId(?string $readingsWayId): static
    {
        $this->readingsWayId = $readingsWayId;

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

    public function getStart(): ?int
    {
        return $this->start;
    }

    public function setStart(?int $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getIsScaleOverflow(): ?int
    {
        return $this->isScaleOverflow;
    }

    public function setIsScaleOverflow(?int $isScaleOverflow): static
    {
        $this->isScaleOverflow = $isScaleOverflow;

        return $this;
    }


    public function __toString(): string
    {
        return $this->readings;
    }
}
