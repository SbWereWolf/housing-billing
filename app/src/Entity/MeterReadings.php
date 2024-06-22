<?php

namespace App\Entity;

use App\Entity\Column\HasBillingPeriod;
use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use App\Entity\Column\HasRawReadings;
use App\Entity\Column\HasTestingRun;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeterReadings
 */
#[ORM\Table(name: 'meter_readings')]
#[ORM\UniqueConstraint(name: 'meter_readings_product_distributor_point_year_month_ux', columns: ['product_id', 'distributor_id', 'distribution_point_id', 'year', 'month'])]
#[ORM\Entity(repositoryClass: \App\Repository\MeterReadingsRepository::class)]
class MeterReadings
{
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;
    use HasRawReadings;
    use HasBillingPeriod;
    use HasTestingRun;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'meter_readings_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
