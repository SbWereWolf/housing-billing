<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccountShare
 *
 * @ORM\Table(name="personal_account_share", uniqueConstraints={@ORM\UniqueConstraint(name="personal_account_share_product_point_customer_account_ux", columns={"product_id", "distributor_id", "address_id", "distribution_point_id", "customer_id", "personal_account_id"}), @ORM\UniqueConstraint(name="personal_account_share_product_address_account_id_ux", columns={"product_id", "distributor_id", "address_id", "personal_account_id", "distribution_point_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonalAccountShareRepository")
 */
class PersonalAccountShare
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="personal_account_share_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="personal_account_id", type="bigint", nullable=true)
     */
    private $personalAccountId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="bigint", nullable=true)
     */
    private $productId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distributor_id", type="bigint", nullable=true)
     */
    private $distributorId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distribution_point_id", type="bigint", nullable=true)
     */
    private $distributionPointId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="address_id", type="bigint", nullable=true)
     */
    private $addressId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="customer_id", type="bigint", nullable=true)
     */
    private $customerId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="share_dividend", type="integer", nullable=true, options={"comment"="Делимое"})
     */
    private $shareDividend;

    /**
     * @var int|null
     *
     * @ORM\Column(name="share_divisor", type="integer", nullable=true, options={"default"="1","comment"="Делитель"})
     */
    private $shareDivisor = 1;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getDistributorId(): ?string
    {
        return $this->distributorId;
    }

    public function setDistributorId(?string $distributorId): static
    {
        $this->distributorId = $distributorId;

        return $this;
    }

    public function getDistributionPointId(): ?string
    {
        return $this->distributionPointId;
    }

    public function setDistributionPointId(?string $distributionPointId): static
    {
        $this->distributionPointId = $distributionPointId;

        return $this;
    }

    public function getAddressId(): ?string
    {
        return $this->addressId;
    }

    public function setAddressId(?string $addressId): static
    {
        $this->addressId = $addressId;

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

    public function getShareDividend(): ?int
    {
        return $this->shareDividend;
    }

    public function setShareDividend(?int $shareDividend): static
    {
        $this->shareDividend = $shareDividend;

        return $this;
    }

    public function getShareDivisor(): ?int
    {
        return $this->shareDivisor;
    }

    public function setShareDivisor(?int $shareDivisor): static
    {
        $this->shareDivisor = $shareDivisor;

        return $this;
    }


}
