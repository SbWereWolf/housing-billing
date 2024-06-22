<?php

namespace App\Entity\Column;

use App\Entity\ReadingsWay;
use Doctrine\ORM\Mapping as ORM;

trait HasWay
{
    /**
     * @var ReadingsWay
     */
    #[ORM\JoinColumn(name: 'readings_way_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\ReadingsWay::class)]
    protected ReadingsWay $way;

    public function getWay(): ReadingsWay
    {
        return $this->way;
    }

    public function setWay(
        ReadingsWay $way
    ): static {
        $this->way = $way;

        return $this;
    }
}