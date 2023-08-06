<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReasonOfWeededOut
 *
 * @ORM\Table(name="reason_of_weeded_out", uniqueConstraints={@ORM\UniqueConstraint(name="reason_for_weed_out_testing_run_id_testing_set_id_rule_id_ux", columns={"testing_run_id", "testing_set_id", "testing_rule_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReasonOfWeededOutRepository")
 */
class ReasonOfWeededOut
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reason_of_weeded_out_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
