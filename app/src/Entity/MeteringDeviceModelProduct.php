<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeteringDeviceModelProduct
 *
 * @ORM\Table(name="metering_device_model_product", uniqueConstraints={@ORM\UniqueConstraint(name="metering_device_model_product_product_device_model_id_ux", columns={"product_id", "metering_device_model_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\MeteringDeviceModelProductRepository")
 */
class MeteringDeviceModelProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="metering_device_model_product_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="metering_device_model_id", type="bigint", nullable=true)
     */
    private $meteringDeviceModelId;

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

    public function getMeteringDeviceModelId(): ?string
    {
        return $this->meteringDeviceModelId;
    }

    public function setMeteringDeviceModelId(?string $meteringDeviceModelId): static
    {
        $this->meteringDeviceModelId = $meteringDeviceModelId;

        return $this;
    }


}
