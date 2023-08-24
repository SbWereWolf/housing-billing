<?php

namespace App\Entity;

use App\Entity\Column\HasProduct;
use App\Entity\Column\HasUnitsOfMeasure;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductUnitsOfMeasure
 *
 * @ORM\Table(name="product_units_of_measure", uniqueConstraints={@ORM\UniqueConstraint(name="product_units_of_measure_product_id_units_of_measure_id_ux", columns={"product_id", "units_of_measure_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductUnitsOfMeasureRepository")
 */
class ProductUnitsOfMeasure
{
    use HasProduct;
    use HasUnitsOfMeasure;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_units_of_measure_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
