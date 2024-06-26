<?php

namespace App\Entity\Column;

use App\Entity\RawReadings;
use Doctrine\ORM\Mapping as ORM;

trait HasRawReadings
{
    /**
     * @var RawReadings
     */
    #[ORM\JoinColumn(name: 'raw_readings_id')]
    #[ORM\ManyToOne(targetEntity: RawReadings::class)]
    protected RawReadings $rawReadings;

    public function getRawReadings(): RawReadings
    {
        return $this->rawReadings;
    }

    public function setRawReadings(RawReadings $rawReadings): static
    {
        $this->rawReadings = $rawReadings;

        return $this;
    }
}