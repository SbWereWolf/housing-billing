<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RelatedProduct
 */
#[ORM\Table(name: 'related_product')]
#[ORM\Entity(repositoryClass: \App\Repository\RelatedProductRepository::class)]
class RelatedProduct
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'related_product_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var Product
     */
    #[ORM\JoinColumn(name: 'parent_product_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\Product::class)]
    private Product $parent;

    /**
     * @var Product
     */
    #[ORM\JoinColumn(name: 'child_product_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\Product::class)]
    private Product $child;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getParent(): Product
    {
        return $this->parent;
    }

    public function setParent(Product $parent): static
    {
        $this->parent = $parent;

        return $this;
    }

    public function getChild(): Product
    {
        return $this->child;
    }

    public function setChild(Product $child): static
    {
        $this->child = $child;

        return $this;
    }


}
