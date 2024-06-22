<?php

namespace App\Entity;

use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use App\Repository\ProductDistributorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductDistributor
 */
#[ORM\Table(name: 'product_distributor')]
#[ORM\UniqueConstraint(name: 'product_distributor_product_id_distributor_id_ux', columns: [
    'product_id',
    'distributor_id'
])]
#[ORM\Entity(repositoryClass: ProductDistributorRepository::class)]
class ProductDistributor
{
    use HasProduct;
    use HasDistributor;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'product_distributor_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
