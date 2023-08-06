<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * TestingRuleSet
 *
 * @ORM\Table(name="testing_rule_set", uniqueConstraints={@ORM\UniqueConstraint(name="testing_set_testing_rule_testing_set_id_testing_rule_id_ux", columns={"testing_set_id", "testing_rule_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\TestingRuleSetRepository")
 */
class TestingRuleSet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="testing_rule_set_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
