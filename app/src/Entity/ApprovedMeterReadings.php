<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ApprovedMeterReadings
 *
 * @ORM\Table(name="approved_meter_readings", uniqueConstraints={@ORM\UniqueConstraint(name="approved_meter_readings_product_distributor_year_month_run_ux", columns={"product_id", "distributor_id", "distribution_point_id", "year", "month", "testing_run_id", "raw_readings_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ApprovedMeterReadingsRepository")
 */
class ApprovedMeterReadings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="approved_meter_readings_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="raw_readings_id", type="bigint", nullable=true)
     */
    private $rawReadingsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="testing_run_id", type="bigint", nullable=true)
     */
    private $testingRunId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="testing_set_id", type="bigint", nullable=true)
     */
    private $testingSetId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month", type="integer", nullable=true)
     */
    private $month;

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

    public function getRawReadingsId(): ?string
    {
        return $this->rawReadingsId;
    }

    public function setRawReadingsId(?string $rawReadingsId): static
    {
        $this->rawReadingsId = $rawReadingsId;

        return $this;
    }

    public function getTestingRunId(): ?string
    {
        return $this->testingRunId;
    }

    public function setTestingRunId(?string $testingRunId): static
    {
        $this->testingRunId = $testingRunId;

        return $this;
    }

    public function getTestingSetId(): ?string
    {
        return $this->testingSetId;
    }

    public function setTestingSetId(?string $testingSetId): static
    {
        $this->testingSetId = $testingSetId;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->month;
    }

    public function setMonth(?int $month): static
    {
        $this->month = $month;

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
