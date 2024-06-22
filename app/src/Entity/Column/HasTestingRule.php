<?php

namespace App\Entity\Column;

use App\Entity\TestingRule;
use Doctrine\ORM\Mapping as ORM;

trait HasTestingRule
{
    /**
     * @var TestingRule
     */
    #[ORM\JoinColumn(name: 'testing_rule_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\TestingRule::class)]
    protected TestingRule $rule;

    public function getRule(): TestingRule
    {
        return $this->rule;
    }

    public function setRule(TestingRule $rule): static
    {
        $this->rule = $rule;

        return $this;
    }
}