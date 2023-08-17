<?php

namespace App\Entity;

use App\Entity\Column\HasBillingPeriod;
use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use App\Entity\Column\HasRawReadings;
use App\Entity\Column\HasTestingRun;
use App\Entity\Column\HasTestingSet;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Stringable;

/**
 * ApprovedMeterReadings
 *
 * @ORM\Table(name="approved_meter_readings", uniqueConstraints={@ORM\UniqueConstraint(name="approved_meter_readings_product_distributor_year_month_run_ux", columns={"product_id", "distributor_id", "distribution_point_id", "year", "month", "testing_run_id", "raw_readings_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ApprovedMeterReadingsRepository")
 */
class ApprovedMeterReadings implements Stringable
{
    use HasRawReadings;
    use HasTestingRun;
    use HasTestingSet;
    use HasBillingPeriod;
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="approved_meter_readings_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    #[Pure]
    public function __toString(): string
    {
        $rr = $this->getRawReadings();
        $tr = $this->getTestingRun();
        $p = $this->getProduct();
        $dp = $this->getDistributionPoint();
        return "{$rr} ({$p}: {$dp}), {$tr}";
    }
}
