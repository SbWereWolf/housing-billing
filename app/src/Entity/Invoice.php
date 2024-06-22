<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 */
#[ORM\Table(name: 'invoice')]
#[ORM\UniqueConstraint(name: 'invoice_personal_account_id_units_of_measure_id_year_month_ux', columns: ['personal_account_id', 'units_of_measure_id', 'year', 'month'])]
#[ORM\UniqueConstraint(name: 'invoice_personal_account_id_year_month_ux', columns: ['personal_account_id', 'year', 'month'])]
#[ORM\Entity(repositoryClass: \App\Repository\InvoiceRepository::class)]
class Invoice
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'invoice_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'personal_account_id', type: 'integer', nullable: true)]
    private $personalAccountId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'year', type: 'integer', nullable: true)]
    private $year;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'month', type: 'integer', nullable: true)]
    private $month;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'billed', type: 'datetimetz', nullable: true)]
    private $billed;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'amount', type: 'bigint', nullable: true)]
    private $amount;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'units_of_measure_id', type: 'bigint', nullable: true)]
    private $unitsOfMeasureId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPersonalAccountId(): ?int
    {
        return $this->personalAccountId;
    }

    public function setPersonalAccountId(?int $personalAccountId): static
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

    public function getBilled(): ?\DateTimeInterface
    {
        return $this->billed;
    }

    public function setBilled(?\DateTimeInterface $billed): static
    {
        $this->billed = $billed;

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
