<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceProductUsage
 *
 * @ORM\Table(name="invoice_product_usage", uniqueConstraints={@ORM\UniqueConstraint(name="invoice_product_usage_product_distributor_point_year_month_ux", columns={"product_id", "distributor_id", "distribution_point_id", "year", "month", "personal_account_id", "units_of_measure_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceProductUsageRepository")
 */
class InvoiceProductUsage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="invoice_product_usage_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="distribution_point_id", type="integer", nullable=true)
     */
    private $distributionPointId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount", type="bigint", nullable=true)
     */
    private $amount;

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

    public function getPersonalAccountId(): ?string
    {
        return $this->personalAccountId;
    }

    public function setPersonalAccountId(?string $personalAccountId): static
    {
        $this->personalAccountId = $personalAccountId;

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

    public function getDistributionPointId(): ?int
    {
        return $this->distributionPointId;
    }

    public function setDistributionPointId(?int $distributionPointId): static
    {
        $this->distributionPointId = $distributionPointId;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): static
    {
        $this->amount = $amount;

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
