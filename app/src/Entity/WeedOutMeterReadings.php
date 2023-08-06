<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * WeedOutMeterReadings
 *
 * @ORM\Table(name="weed_out_meter_readings")
 * @ORM\Entity(repositoryClass="App\Repository\WeedOutMeterReadingsRepository")
 */
class WeedOutMeterReadings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weed_out_meter_readings_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remark", type="text", nullable=true)
     */
    private $remark;

    /**
     * @var int|null
     *
     * @ORM\Column(name="raw_readings_id", type="bigint", nullable=true)
     */
    private $rawReadingsId;

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
     * @ORM\Column(name="testing_run_id", type="bigint", nullable=true)
     */
    private $testingRunId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="testing_set_id", type="bigint", nullable=true)
     */
    private $testingSetId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="testing_rule_id", type="bigint", nullable=true)
     */
    private $testingRuleId;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getRawReadingsId(): ?string
    {
        return $this->rawReadingsId;
    }

    public function setRawReadingsId(?string $rawReadingsId): static
    {
        $this->rawReadingsId = $rawReadingsId;

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

    public function getTestingRunId(): ?string
    {
        return $this->testingRunId;
    }

    public function setTestingRunId(?string $testingRunId): static
    {
        $this->testingRunId = $testingRunId;

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

    public function getTestingRuleId(): ?string
    {
        return $this->testingRuleId;
    }

    public function setTestingRuleId(?string $testingRuleId): static
    {
        $this->testingRuleId = $testingRuleId;

        return $this;
    }


}
