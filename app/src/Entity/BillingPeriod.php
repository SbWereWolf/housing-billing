<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * BillingPeriod
 */
#[ORM\Table(name: 'billing_period')]
#[ORM\UniqueConstraint(name: 'billing_period_year_month_ux', columns: ['year', 'month'])]
#[ORM\Entity(repositoryClass: \App\Repository\BillingPeriodRepository::class)]
class BillingPeriod
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'billing_period_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

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
     * @var string|null
     */
    #[ORM\Column(name: 'title', type: 'text', nullable: true)]
    private $title;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'start', type: 'datetimetz', nullable: true)]
    private $start;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'finish', type: 'datetimetz', nullable: true)]
    private $finish;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(?\DateTimeInterface $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getFinish(): ?\DateTimeInterface
    {
        return $this->finish;
    }

    public function setFinish(?\DateTimeInterface $finish): static
    {
        $this->finish = $finish;

        return $this;
    }


}
