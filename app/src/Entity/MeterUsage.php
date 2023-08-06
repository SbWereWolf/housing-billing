<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeterUsage
 *
 * @ORM\Table(name="meter_usage", uniqueConstraints={@ORM\UniqueConstraint(name="meter_usage_product_distributor_point_year_month_units_ux", columns={"product_id", "distributor_id", "distribution_point_id", "year", "month", "units_of_measure_id"})})
 * @ORM\Entity
 */
class MeterUsage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meter_usage_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="previous_year", type="integer", nullable=true)
     */
    private $previousYear;

    /**
     * @var int|null
     *
     * @ORM\Column(name="previous_month", type="integer", nullable=true)
     */
    private $previousMonth;

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
     * @ORM\Column(name="volume", type="bigint", nullable=true)
     */
    private $volume;

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

    public function getPreviousYear(): ?int
    {
        return $this->previousYear;
    }

    public function setPreviousYear(?int $previousYear): static
    {
        $this->previousYear = $previousYear;

        return $this;
    }

    public function getPreviousMonth(): ?int
    {
        return $this->previousMonth;
    }

    public function setPreviousMonth(?int $previousMonth): static
    {
        $this->previousMonth = $previousMonth;

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

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(?string $volume): static
    {
        $this->volume = $volume;

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
