<?php

namespace App\Entity;

use App\Entity\Column\HasAddress;
use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeteringPoint
 */
#[ORM\Table(name: 'metering_point')]
#[ORM\UniqueConstraint(name: 'metering_point_product_distributor_address_point_ux', columns: ['product_id', 'distributor_id', 'address_id', 'distribution_point_id'])]
#[ORM\UniqueConstraint(name: 'metering_point_product_id_distributor_id_point_id_ux', columns: ['product_id', 'distributor_id', 'distribution_point_id'])]
#[ORM\Entity(repositoryClass: \App\Repository\MeteringPointRepository::class)]
class MeteringPoint
{
    use HasAddress;
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'metering_point_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
