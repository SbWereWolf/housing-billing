<?php

namespace App\Entity;

use App\Entity\Column\HasBillingPeriod;
use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use App\Entity\Column\HasUnitsOfMeasure;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeterUsage
 */
#[ORM\Table(name: 'meter_usage')]
#[ORM\UniqueConstraint(name: 'meter_usage_product_distributor_point_year_month_units_ux', columns: ['product_id', 'distributor_id', 'distribution_point_id', 'year', 'month', 'units_of_measure_id'])]
#[ORM\Entity(repositoryClass: \App\Repository\MeterUsageRepository::class)]
class MeterUsage
{
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;
    use HasBillingPeriod;
    use HasUnitsOfMeasure;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'meter_usage_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'previous_year', type: 'integer', nullable: true)]
    private $previousYear;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'previous_month', type: 'integer', nullable: true)]
    private $previousMonth;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'volume', type: 'bigint', nullable: true)]
    private $volume;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(?string $volume): static
    {
        $this->volume = $volume;

        return $this;
    }
}
