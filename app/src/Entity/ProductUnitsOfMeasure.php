<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductUnitsOfMeasure
 *
 * @ORM\Table(name="product_units_of_measure", uniqueConstraints={@ORM\UniqueConstraint(name="product_units_of_measure_product_id_units_of_measure_id_ux", columns={"product_id", "units_of_measure_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductUnitsOfMeasureRepository")
 */
class ProductUnitsOfMeasure
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_units_of_measure_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="bigint", nullable=true)
     */
    private $productId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="units_of_measure_id", type="bigint", nullable=true)
     */
    private $unitsOfMeasureId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getUnitsOfMeasureId(): ?string
    {
        return $this->unitsOfMeasureId;
    }

    public function setUnitsOfMeasureId(?string $unitsOfMeasureId): static
    {
        $this->unitsOfMeasureId = $unitsOfMeasureId;

        return $this;
    }


}
