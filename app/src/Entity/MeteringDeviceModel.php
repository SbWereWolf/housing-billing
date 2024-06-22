<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeteringDeviceModel
 */
#[ORM\Table(name: 'metering_device_model')]
#[ORM\UniqueConstraint(name: 'metering_device_model_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: \App\Repository\MeteringDeviceModelRepository::class)]
class MeteringDeviceModel extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'metering_device_model_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
