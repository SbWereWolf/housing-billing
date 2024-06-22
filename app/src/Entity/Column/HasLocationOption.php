<?php

namespace App\Entity\Column;

use App\Entity\LocationOption;
use Doctrine\ORM\Mapping as ORM;

trait HasLocationOption
{
    /**
     * @var LocationOption
     */
    #[ORM\JoinColumn(name: 'location_option_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\LocationOption::class)]
    protected LocationOption $locationOption;

    public function getLocationOption(): LocationOption
    {
        return $this->locationOption;
    }

    public function setLocationOption(
        LocationOption $locationOption
    ): static {
        $this->locationOption = $locationOption;

        return $this;
    }
}