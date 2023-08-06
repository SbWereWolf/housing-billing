<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalProductUsage
 *
 * @ORM\Table(name="personal_product_usage", uniqueConstraints={@ORM\UniqueConstraint(name="personal_product_usage_product_address_customer_account_ux", columns={"product_id", "distributor_id", "address_id", "distribution_point_id", "customer_id", "personal_account_id", "year", "month"}), @ORM\UniqueConstraint(name="personal_product_usage_product_address_account_year_month_ux", columns={"product_id", "distributor_id", "address_id", "personal_account_id", "distribution_point_id", "year", "month"})})
 * @ORM\Entity
 */
class PersonalProductUsage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="personal_product_usage_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month", type="integer", nullable=true)
     */
    private $month;

    /**
     * @var int|null
     *
     * @ORM\Column(name="personal_account_id", type="bigint", nullable=true)
     */
    private $personalAccountId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="volume", type="bigint", nullable=true)
     */
    private $volume;

    /**
     * @var int|null
     *
     * @ORM\Column(name="units_of_measure_id", type="bigint", nullable=true)
     */
    private $unitsOfMeasureId;

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

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->month;
    }

    public function setMonth(?int $month): static
    {
        $this->month = $month;

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

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(?string $volume): static
    {
        $this->volume = $volume;

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


}
