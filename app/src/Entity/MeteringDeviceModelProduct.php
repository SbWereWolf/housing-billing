<?php

namespace App\Entity;

use App\Entity\Column\HasModel;
use App\Entity\Column\HasProduct;
use App\Repository\MeteringDeviceModelProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeteringDeviceModelProduct
 */
#[ORM\Table(name: 'metering_device_model_product')]
#[ORM\UniqueConstraint(name: 'metering_device_model_product_product_device_model_id_ux', columns: [
    'product_id',
    'metering_device_model_id'
])]
#[ORM\Entity(repositoryClass: MeteringDeviceModelProductRepository::class)]
class MeteringDeviceModelProduct
{
    use HasProduct;
    use HasModel;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'metering_device_model_product_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
