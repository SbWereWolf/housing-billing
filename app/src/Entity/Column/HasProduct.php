<?php

namespace App\Entity\Column;

use App\Entity\Product;
use Doctrine\ORM\Mapping as ORM;

trait HasProduct
{
    /**
     * @var Product
     */
    #[ORM\JoinColumn(name: 'product_id')]
    #[ORM\ManyToOne(targetEntity: Product::class)]
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