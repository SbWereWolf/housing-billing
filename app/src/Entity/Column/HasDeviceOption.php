<?php

namespace App\Entity\Column;

use App\Entity\DeviceOption;
use Doctrine\ORM\Mapping as ORM;

trait HasDeviceOption
{
    /**
     * @var DeviceOption
     */
    #[ORM\JoinColumn(name: 'device_option_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\DeviceOption::class)]
    protected DeviceOption $deviceOption;

    public function getDeviceOption(): DeviceOption
    {
        return $this->deviceOption;
    }

    public function setDeviceOption(
        DeviceOption $deviceOption
    ): static {
        $this->deviceOption = $deviceOption;

        return $this;
    }
}