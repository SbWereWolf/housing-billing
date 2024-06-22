<?php

namespace App\Entity\Column;

use App\Entity\PersonalAccount;
use App\Entity\UnitsOfMeasure;
use Doctrine\ORM\Mapping as ORM;

trait HasUnitsOfMeasure
{
    /**
     * @var UnitsOfMeasure
     */
    #[ORM\JoinColumn(name: 'units_of_measure_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\UnitsOfMeasure::class)]
    protected UnitsOfMeasure $unitsOfMeasure;

    public function getUnitsOfMeasure(): UnitsOfMeasure
    {
        return $this->unitsOfMeasure;
    }

    public function setUnitsOfMeasure(
        UnitsOfMeasure $unitsOfMeasure
    ): static {
        $this->unitsOfMeasure = $unitsOfMeasure;

        return $this;
    }
}