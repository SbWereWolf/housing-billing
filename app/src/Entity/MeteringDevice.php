<?php

namespace App\Entity;

use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasModel;
use App\Entity\Column\HasProduct;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeteringDevice
 *
 * @ORM\Table(name="metering_device", uniqueConstraints={@ORM\UniqueConstraint(name="metering_device_product_distributor_point_model_start_ux", columns={"product_id", "distributor_id", "distribution_point_id", "metering_device_model_id", "start"})})
 * @ORM\Entity(repositoryClass="App\Repository\MeteringDeviceRepository")
 */
class MeteringDevice
{
    use HasModel;
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;

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
     * @ORM\Column(name="start", type="bigint", nullable=true)
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

    public function getId(): ?string
    {
        return $this->id;
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
}
