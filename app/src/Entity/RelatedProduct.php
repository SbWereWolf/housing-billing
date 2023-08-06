<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RelatedProduct
 *
 * @ORM\Table(name="related_product")
 * @ORM\Entity(repositoryClass="App\Repository\RelatedProductRepository")
 */
class RelatedProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="related_product_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_product_id", type="bigint", nullable=false)
     */
    private $parentProductId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_product_id", type="bigint", nullable=true)
     */
    private $childProductId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getParentProductId(): ?string
    {
        return $this->parentProductId;
    }

    public function setParentProductId(string $parentProductId): static
    {
        $this->parentProductId = $parentProductId;

        return $this;
    }

    public function getChildProductId(): ?string
    {
        return $this->childProductId;
    }

    public function setChildProductId(?string $childProductId): static
    {
        $this->childProductId = $childProductId;

        return $this;
    }


}
