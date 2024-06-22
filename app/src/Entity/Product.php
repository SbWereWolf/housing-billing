<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
#[ORM\Table(name: 'product')]
#[ORM\UniqueConstraint(name: 'product_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'product_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }


}
