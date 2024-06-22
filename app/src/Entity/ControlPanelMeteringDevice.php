<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ControlPanelMeteringDevice
 */
#[ORM\Table(name: 'control_panel_metering_device')]
#[ORM\Entity(repositoryClass: \App\Repository\ControlPanelMeteringDeviceRepository::class)]
class ControlPanelMeteringDevice
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'control_panel_metering_device_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'control_panel_id', type: 'bigint', nullable: true)]
    private $controlPanelId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'metering_device_id', type: 'bigint', nullable: true)]
    private $meteringDeviceId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getControlPanelId(): ?string
    {
        return $this->controlPanelId;
    }

    public function setControlPanelId(?string $controlPanelId): static
    {
        $this->controlPanelId = $controlPanelId;

        return $this;
    }

    public function getMeteringDeviceId(): ?string
    {
        return $this->meteringDeviceId;
    }

    public function setMeteringDeviceId(?string $meteringDeviceId): static
    {
        $this->meteringDeviceId = $meteringDeviceId;

        return $this;
    }


}
