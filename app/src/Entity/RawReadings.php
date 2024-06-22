<?php

namespace App\Entity;

use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasModel;
use App\Entity\Column\HasProduct;
use App\Entity\Column\HasSender;
use App\Entity\Column\HasWay;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Stringable;

/**
 * RawReadings
 */
#[ORM\Table(name: 'raw_readings')]
#[ORM\UniqueConstraint(name: 'raw_readings_product_id_distributor_id_point_id_id_ux', columns: ['product_id', 'distributor_id', 'distribution_point_id', 'id'])]
#[ORM\Entity(repositoryClass: \App\Repository\RawReadingsRepository::class)]
class RawReadings implements Stringable
{
    use HasModel;
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;
    use HasSender;
    use HasWay;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'raw_readings_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'readings', type: 'text', nullable: true)]
    private $readings;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'upload_time', type: 'datetimetz', nullable: true)]
    private $uploadTime;

    /**
     * @var DeviceModelScale
     */
    #[ORM\JoinColumn(name: 'device_model_scale_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\DeviceModelScale::class)]
    private $modelScale;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'start', type: 'bigint', nullable: true)]
    private $start;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'is_scale_overflow', type: 'integer', nullable: true)]
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

    public function getUploadTime(): ?DateTimeInterface
    {
        return $this->uploadTime;
    }

    public function setUploadTime(?DateTimeInterface $uploadTime): static
    {
        $this->uploadTime = $uploadTime;

        return $this;
    }

    public function getModelScale(): DeviceModelScale
    {
        return $this->modelScale;
    }

    public function setModelScale(DeviceModelScale $modelScale): static
    {
        $this->modelScale = $modelScale;

        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): static
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
