<?php

namespace App\Entity\Column;

use App\Entity\DistributionPoint;
use Doctrine\ORM\Mapping as ORM;

trait HasDistributionPoint
{

    /**
     * @var DistributionPoint
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\DistributionPoint")
     * @ORM\JoinColumn(name="distribution_point_id")
     */
    private DistributionPoint $distributionPoint;

    public function getDistributionPoint(): DistributionPoint
    {
        return $this->distributionPoint;
    }

    public function setDistributionPoint(DistributionPoint $distributionPoint): static
    {
        $this->distributionPoint = $distributionPoint;

        return $this;
    }
}