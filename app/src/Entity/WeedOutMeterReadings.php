<?php

namespace App\Entity;

use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use App\Entity\Column\HasRawReadings;
use App\Entity\Column\HasTestingRule;
use App\Entity\Column\HasTestingRun;
use App\Entity\Column\HasTestingSet;
use App\Repository\WeedOutMeterReadingsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * WeedOutMeterReadings
 */
#[ORM\Table(name: 'weed_out_meter_readings')]
#[ORM\Entity(repositoryClass: WeedOutMeterReadingsRepository::class)]
class WeedOutMeterReadings
{
    use HasTestingRun;
    use HasTestingSet;
    use HasTestingRule;
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;
    use HasRawReadings;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'weed_out_meter_readings_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'remark', type: 'text', nullable: true)]
    private $remark;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;

        return $this;
    }
}
