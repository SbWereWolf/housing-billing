<?php

namespace App\Entity;

use App\Entity\Column\HasBillingPeriod;
use App\Entity\Column\HasTestingSet;
use Doctrine\ORM\Mapping as ORM;

/**
 * TestingRun
 */
#[ORM\Table(name: 'testing_run')]
#[ORM\UniqueConstraint(name: 'testing_run_year_month_id_ux', columns: ['year', 'month', 'id'])]
#[ORM\UniqueConstraint(name: 'testing_run_id_testing_set_id_ux', columns: ['id', 'testing_set_id'])]
#[ORM\Entity(repositoryClass: \App\Repository\TestingRunRepository::class)]
class TestingRun implements \Stringable
{
    use HasBillingPeriod;
    use HasTestingSet;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'testing_run_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'start_time', type: 'datetimetz', nullable: true)]
    private $startTime;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'remark', type: 'text', nullable: true)]
    private $remark;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTimeInterface $startTime): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;

        return $this;
    }

    public function __toString(): string
    {
        $year = $this->getYear();
        $month = $this->getMonth();
        $testingSet = $this->getTestingSet();

        return "{$year} {$month} {$testingSet}";
    }
}
