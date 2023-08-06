<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * TestingRun
 *
 * @ORM\Table(name="testing_run", uniqueConstraints={@ORM\UniqueConstraint(name="testing_run_year_month_id_ux", columns={"year", "month", "id"}), @ORM\UniqueConstraint(name="testing_run_id_testing_set_id_ux", columns={"id", "testing_set_id"})})
 * @ORM\Entity
 */
class TestingRun
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="testing_run_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_time", type="datetimetz", nullable=true)
     */
    private $startTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="testing_set_id", type="bigint", nullable=true)
     */
    private $testingSetId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remark", type="text", nullable=true)
     */
    private $remark;

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

    public function getTestingSetId(): ?string
    {
        return $this->testingSetId;
    }

    public function setTestingSetId(?string $testingSetId): static
    {
        $this->testingSetId = $testingSetId;

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


}
