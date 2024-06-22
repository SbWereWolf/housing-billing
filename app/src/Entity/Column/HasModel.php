<?php

namespace App\Entity\Column;

use App\Entity\MeteringDeviceModel;
use Doctrine\ORM\Mapping as ORM;

trait HasModel
{
    /**
     * @var MeteringDeviceModel
     */
    #[ORM\JoinColumn(name: 'metering_device_model_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\MeteringDeviceModel::class)]
    protected MeteringDeviceModel $model;

    public function getModel(): MeteringDeviceModel
    {
        return $this->model;
    }

    public function setModel(
        MeteringDeviceModel $model
    ): static {
        $this->model = $model;

        return $this;
    }
}