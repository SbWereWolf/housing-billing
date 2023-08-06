<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPersonalAccount
 *
 * @ORM\Table(name="product_personal_account", uniqueConstraints={@ORM\UniqueConstraint(name="product_personal_account_product_customer_account_id_ux", columns={"customer_id", "personal_account_id", "product_id"})})
 * @ORM\Entity
 */
class ProductPersonalAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_personal_account_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="personal_account_id", type="bigint", nullable=true)
     */
    private $personalAccountId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="customer_id", type="bigint", nullable=true)
     */
    private $customerId;

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

    public function getPersonalAccountId(): ?string
    {
        return $this->personalAccountId;
    }

    public function setPersonalAccountId(?string $personalAccountId): static
    {
        $this->personalAccountId = $personalAccountId;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }


}
