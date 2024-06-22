<?php

namespace App\Entity\Column;

use App\Entity\MeasuringScale;
use Doctrine\ORM\Mapping as ORM;

trait HasScale
{
    /**
     * @var MeasuringScale
     */
    #[ORM\JoinColumn(name: 'measuring_scale_id')]
    #[ORM\ManyToOne(targetEntity: MeasuringScale::class)]
    protected MeasuringScale $scale;

    public function getScale(): MeasuringScale
    {
        return $this->scale;
    }

    public function setScale(
        MeasuringScale $scale
    ): static {
        $this->scale = $scale;

        return $this;
    }
}