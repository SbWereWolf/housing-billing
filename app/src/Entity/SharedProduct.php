<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * SharedProduct
 *
 * @ORM\Table(name="shared_product")
 * @ORM\Entity(repositoryClass="App\Repository\SharedProductRepository")
 */
class SharedProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shared_product_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Product")
     * @ORM\JoinColumn(name="shared_product_id")
     */
    private Product $shared;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Product")
     * @ORM\JoinColumn(name="individual_product_id")
     */
    private Product $individual;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getShared(): Product
    {
        return $this->shared;
    }

    public function setShared(Product $shared): static
    {
        $this->shared = $shared;

        return $this;
    }

    public function getIndividual(): Product
    {
        return $this->individual;
    }

    public function setIndividual(Product $individual): static
    {
        $this->individual = $individual;

        return $this;
    }


}
