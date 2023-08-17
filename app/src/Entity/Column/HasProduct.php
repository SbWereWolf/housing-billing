<?php

namespace App\Entity\Column;

use App\Entity\Address;
use App\Entity\Product;
use Doctrine\ORM\Mapping as ORM;

trait HasProduct
{
    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Product")
     * @ORM\JoinColumn(name="product_id")
     */
    protected Product $product;

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): static
    {
        $this->product = $product;

        return $this;
    }
}